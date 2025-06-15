// Author: watcha27, this was made on 15.06.25
// 
// Particle.JS Clone Cause why not???

class Particle {
  constructor(canvasWidth, canvasHeight, x = null, y = null) {
    this.x = x !== null ? x : Math.random() * canvasWidth;
    this.y = y !== null ? y : Math.random() * canvasHeight;
    this.radius = Math.random() * 2 + 1;
    this.speedX = (Math.random() - 0.5) * 0.5;
    this.speedY = (Math.random() - 0.5) * 0.5;
    this.canvasWidth = canvasWidth;
    this.canvasHeight = canvasHeight;
  }

  update() {
    this.x += this.speedX;
    this.y += this.speedY;

    if (this.x < 0 || this.x > this.canvasWidth) this.speedX = -this.speedX;
    if (this.y < 0 || this.y > this.canvasHeight) this.speedY = -this.speedY;
  }

  draw(ctx) {
    ctx.beginPath();
    ctx.fillStyle = 'rgba(0, 123, 255, 0.7)';
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    ctx.fill();
  }
}

class ParticleSystem {
  constructor(canvasId, numParticles) {
    this.canvas = document.getElementById(canvasId);
    this.ctx = this.canvas.getContext('2d');
    this.particles = [];
    this.numParticles = numParticles;

    this.resize();
    window.addEventListener('resize', () => this.resize());

    this.loadParticles();

    requestAnimationFrame(() => this.animate());
  }

  resize() {
    const style = getComputedStyle(this.canvas);
    this.canvas.width = parseInt(style.width);
    this.canvas.height = parseInt(style.height);
  }

  loadParticles() {
    const seed = 12345;
    function random(seed) {
      var x = Math.sin(seed) * 10000;
      return x - Math.floor(x);
    }
    for (let i = 0; i < this.numParticles; i++) {
      const x = random(seed + i) * this.canvas.width;
      const y = random(seed + i * 2) * this.canvas.height;
      this.particles.push(new Particle(this.canvas.width, this.canvas.height, x, y));
    }
  }

  createRandomParticles() {
    for (let i = 0; i < this.numParticles; i++) {
      this.particles.push(new Particle(this.canvas.width, this.canvas.height));
    }
  }

  saveParticles() {
    const positions = this.particles.map(p => ({ x: p.x, y: p.y }));
    localStorage.setItem('particlesPositions', JSON.stringify(positions));
  }

  animate() {
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
    for (let particle of this.particles) {
      particle.update();
      particle.draw(this.ctx);
    }
    this.saveParticles();
    requestAnimationFrame(() => this.animate());
  }
}

window.addEventListener('load', () => {
  new ParticleSystem('particle-canvas', 100);
});
