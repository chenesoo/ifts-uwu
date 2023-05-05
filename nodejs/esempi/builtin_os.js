const os=require('os');

console.log('uptime: '+os.uptime());
console.log(os.userInfo());
console.log(os.arch());
console.log(os.platform());
console.log(os.freemem());