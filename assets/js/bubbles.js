var bubble;

function setup() {
  var cnv = createCanvas(windowWidth, windowHeight);
  cnv.parent("bubbles");
  bubble = new Bubble();
  bubble.addBoid(new Boid(windowWidth-50,50,300));
  bubble.addBoid(new Boid(windowWidth-200,300,100));
  bubble.addBoid(new Boid(windowWidth-300,100,150));
}

function draw() {
 clear();
 bubble.run();
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}

function Bubble() {
  // An array for all the boids
  this.boids = []; // Initialize the array
}

Bubble.prototype.run = function() {
  for (var i = 0; i < this.boids.length; i++) {
    this.boids[i].run(this.boids);  // Passing the entire list of boids to each boid individually
  }
}

Bubble.prototype.addBoid = function(b) {
  this.boids.push(b);
}

function Boid(x,y,size) {
  this.position = createVector(x,y);
  this.mySize = size;
  myFactor = random(10,20);
}

Boid.prototype.run = function(boids) {
  var dx, dy, angle1
  fill('#1b3446');
  noStroke();
  ellipse(this.position.x,this.position.y,this.mySize,this.mySize);
  dx = mouseX - this.position.x;
  dy = mouseY - this.position.y;
  angle1 = atan2(dy, dx);
  this.position.x = mouseX - (cos(angle1)*this.mySize);
  this.position.y = mouseY - (sin(angle1)*this.mySize);
}
