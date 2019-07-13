{
  let user = {
      name: 'Инокентий',
      age: 1,
    },
    user2 = {
      name: 'Яков',
    };

  user.sayHi = function() {
    alert('Привет, ' + this.name + '!');
  };

  user['toString'] = function() {
    return this.name;
  };

  user['valueOf'] = function() {
    return this.age;
  };

  user2.g = user.sayHi;

  user.name = 'Яков';
  user.sayHello = () => {
    alert('Привет, ' + this.a + '!');
  };

  // user.sayHello();

  let tag = document.querySelector('li:nth-child(3)'); // document.querySelectorAll('li');

  // alert(tag);

  tag.classList.add('here');
  console.log(tag);

  if (user) {
    // alert({}[0]);
  }

  f = { goals: 2, passes: 1 };
  s = { goals: 6, passes: 2 };

  let players = [f, s];

  players = [
    { name: 'Васька', goals: 5, passes: 5 },
    { name: 'Байт', goals: 12, passes: 2 },
    { name: 'Снежок', goals: 2, passes: 7 },
  ];

  let allGoals = players.reduce((prev, curr) => {
    return prev + curr.goals;
  }, 0);
}
// alert(allGoals)
// **************************************

// let button = document.getElementById('addButton');
// button.onclick = function() {
//   alert('df');
// };

function newElement(tagName, className, text) {
  let element = document.createElement(tagName);
  if (className) {
    element.classList.add(className);
  }
  if (text) {
    element.textContent = text;
  }
  return element;
}

function action() {
  let i = 0;
  return () => {
    i++;
    if (i > 3) {
      let button = document.getElementById('addButton');
      button.value = 'я же говорил, не нажимать!';
      alert('отстань');
      return;
    }
    let main = document.querySelector('main');

    let heading = newElement('h2', '', 'Заголовок дофига № ' + i);

    let paragraph = newElement('p', 'cool', 'дофига зелёный текст № ' + i);

    main.appendChild(heading);
    main.appendChild(paragraph);
  };
}

window.onload = init;

function init() {
  let button = document.getElementById('addButton');
  button.onclick = action();
}
