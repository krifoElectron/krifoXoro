let user = {
    name: 'Инокентий',
  },
  user2 = {
    name: 'Яков',
  };

user.sayHi = function() {
  alert('Привет, ' + this.name + '!');
};

user.sayHi();

user2.g = user.sayHi;

user2.g();

// user.name = 'Яков';
// user.sayHello = () => {
//   alert('Привет, ' + this.name + '!');
// };

// user.sayHello();
