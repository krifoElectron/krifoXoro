let alcoQuantity = document.getElementById('alcoQuantity');

function createDay(date, alco, nonAlco) {
  let tr = newElement('tr', '', '');
  let tdDate = newElement('td', '', date);
  let classOfTag = '';

  if (nonAlco) {
    classOfTag = 'non_alcohol';
  }

  let tdAlco = newElement('td', classOfTag, alco);
  tr.appendChild(tdDate);
  tr.appendChild(tdAlco);
  let table = document.getElementById('table');
  console.log(table);
  let nextSibling = table.childNodes[3].childNodes[2];
  console.log(nextSibling);
  table.childNodes[3].insertBefore(tr, nextSibling);
}

function addDay() {
  let alcohol = document.getElementById('alcoQuantity').value;
  console.log(alcohol);
  console.log(typeof alcohol);

  let dateAlcoStr = document.getElementById('date');
  let dateAlco = new Date(Date.parse(dateAlcoStr.value));
  let day = dateAlco.getDate() < 10 ? '0' + dateAlco.getDate() : dateAlco.getDate();
  let month =
    dateAlco.getMonth() + 1 < 10 ? '0' + (dateAlco.getMonth() + 1) : dateAlco.getMonth() + 1;
  let year = dateAlco.getFullYear();
  let strDay = day + '.' + month + '.' + year;

  // alert(alcohol);
  createDay(strDay, alcohol, false);

  $.post('https://krifoxoro.ru/enter/alcolendar/templates/script.php', {
    day: strDay,
    value: alcohol,
  });
}

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

window.onload = init;

function init() {
  let button = document.getElementById('alcoButton');
  button.onclick = addDay;
}
