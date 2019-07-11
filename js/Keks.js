var getStatistics = function(players) {
  let allGoals = players.reduce((prev, curr) => {
    return prev + curr.goals;
  }, 0);
  console.log(allGoals);
  for (let i = 0; i < players.length; i++) {
    let goals = players[i].goals;
    let passes = players[i].passes;
    players[i].coefficient = 2 * goals + passes;
    players[i].percent = Math.round((goals / allGoals) * 100);
  }
  return players;
};

// let f = {goals: 2, passes: 1};
// let s = {goals: 6, passes: 2};

// let players = [f, s];

// let players = [{"name":"Васька","goals":5,"passes":5},{"name":"Байт","goals":12,"passes":2},{"name":"Снежок","goals":2,"passes":7}]

// console.log(players);
// players = getStatistics(players);
// console.log(players);
