var userAgent = navigator.userAgent;
var x = 10;

if (userAgent.includes("Opera")) {
  var y = 3 * x + 5;
  document.write(y);
} else if (userAgent.includes("Firefox")) {
  var y = x + 3;
  document.write(y);
} else if (userAgent.includes("Chrome")) {
  var y = x / 3 + x / 5;
  document.write(y);
}
