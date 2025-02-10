

const select = (s,o=document) => o.querySelector(s);
//const $$ = (s, o=document) => o.querySelectorAll(s);

// var unsubscribe = select('#unsubscribe');
var game_filed = select('.game_filed');
// if (unsubscribe) {
//   var game = select('.game', unsubscribe);
//   if (game) {
//           // 在这里进行您的操作，确保 unsubscribe 和 game 都不为 null
//       } else {
//           console.error('在unsubscribe内找不到类名为"game"的元素');
//       }
//   // 在这里进行您的操作，确保 unsubscribe 和 game 都不为 null
// } else {
//   console.error('在unsubscribe内找不到类名为"game"的元素');
// }

var game = select('.game', game_filed); 

var upButton = select('.controls .up', game),//confirmButton = select('.confirm', unsubscribe),
downButton = select('.controls .down', game),
startButton = select('.start', game),
pauseButton = select('.pause', game),
continueButton = select('.cont', game);
//closeButton = select('.close', game);

var ball = {
  elem: select('.ball', game),
  x: 0,
  y: 0,
  top: 0,/*上下變變量 */
  left: 0,/*左右變量*/ 

  width: 0,
  height: 0,
  bottom: 0,
  right: 0 },

one = {
  elem: select('.paddle.one', game),
  y: 0,
  top: 0,
  score: 0,
  height: 0,
  width: 0 },

two = {
  elem: select('.paddle.two', game),
  y: 0,
  score: 0,
  height: 0,
  width: 0 },

commodity1 = {
  elem: document.getElementById("commodity_card"),
  x: 0,
  y: 0,
  top: 0,
  bottom: 0,
  left: 0,
  right: 0 },
commodity2 = {
  elem: document.getElementById("product_photo"),
  x: 0,
  y: 0,
  top: 0,
  bottom: 0,
  left: 0,
  right: 0 },

interval;

function init() {

  if (game.classList.contains('idle')) {/*按下start或一方輸球 */

    document.addEventListener('keydown', keydownController, false);
    document.addEventListener('keyup', keyupController, false);

    one.y = game.offsetHeight / 2 - one.elem.offsetHeight / 2;
    two.y = game.offsetHeight / 2 - two.elem.offsetHeight / 2;

    commodity1.x = game.offsetWidth / 2;
    commodity1.y = game.offsetHeight / 2 ;
    commodity2.y= commodity1.y ;


    start();

    game.classList.remove('idle');
    game.classList.add('init');

  }

}
function cont(){

  if (game.classList.contains('stop')) {

    document.addEventListener('keydown', keydownController, false);
    document.addEventListener('keyup', keyupController, false);

    game.classList.remove('stop');
    game.classList.add('init');

    interval = window.setInterval(render, 1000 / 60);
  }

}

startButton.addEventListener('click', init) //e => {
//   game.classList.add('idle');
//   init();
// });

// confirmButton.addEventListener('click', e => {
//   unsubscribe.classList.add('show-game');
// });

pauseButton.addEventListener('click', e => {
  clearInterval(interval);
  game.classList.add('stop');

  document.removeEventListener('keydown', keydownController, false);
  document.removeEventListener('keyup', keyupController, false);
  //setTimeout(() => unsubscribe.classList.remove('hide-game'), 800);
});
// closeButton.addEventListener('click', e => {
//   unsubscribe.classList.add('hide-game');
//   unsubscribe.classList.remove('show-game');
//   setTimeout(() => unsubscribe.classList.remove('hide-game'), 800);
// });
continueButton.addEventListener('click', cont);

function start() {

  // ball.x = game.offsetWidth / 2 - ball.elem.offsetWidth / 2;
  // ball.y = game.offsetHeight / 2 - ball.elem.offsetHeight / 2;

  ball.x = game.offsetWidth - two.elem.offsetWidth -ball.elem.offsetWidth;/*ball的 左 */
  ball.y = game.offsetHeight / 2 - ball.elem.offsetHeight / 2;/*ball的 頂 */

  ball.top = Math.random() * 2 + 2;
  //ball.left = ((Math.random() < .5) ? 1 : -1) * (Math.random() * 2 + 2);
  ball.left = 1 * Math.random() * 2 + 2;

  interval = window.setInterval(render, 1000 / 60);
}

function render() {

  one.y += one.top;
  two.y = ball.y - two.elem.offsetHeight / 2;

  ball.x += ball.left;
  ball.y += ball.top;

  let game_height = game.offsetHeight;/*game界面 高度*/

  one.height = one.elem.offsetHeight;/*one 高度*/
  two.height = two.elem.offsetHeight;/*two 高度*/
  ball.height = ball.elem.offsetHeight;/*球 高度*/

  let card_height = commodity1.elem.offsetHeight;/*卡片 高度*/
  let photo_height = commodity2.elem.offsetHeight;/*卡片 高度*/

  let game_width = game.offsetWidth;/*game界面 寬度*/
  one.width = one.elem.offsetWidth;/*one 寬度*/
  two.width = two.elem.offsetWidth;/*two 寬度*/
  ball.width = ball.elem.offsetWidth;/*球 寬度*/

  let card_width = commodity1.elem.offsetWidth;/*卡片 寬度*/
  let photo_width = commodity2.elem.offsetWidth;/*卡片 寬度*/

  commodity2.x = commodity1.x + commodity2.elem.offsetLeft - photo_width / 2;

  commodity1.top = commodity1.y - card_height /2;
  commodity1.bottom = commodity1.y + card_height / 2;
  commodity1.right = commodity1.x + card_width /2;
  commodity1.left = commodity1.x - card_width / 2;

  commodity2.top = commodity2.y - photo_height /2;
  commodity2.bottom = commodity2.y + photo_height / 2;
  commodity2.right = commodity2.x + photo_width /2;
  commodity2.left = commodity2.x - photo_width / 2;

  let ball_y_center = ball.y + ball.height / 2;
  let ball_x_center = ball.x + ball.width / 2;

  ball.right = ball.x + ball.width;
  ball.bottom = ball.y + ball.height;

  /*bar 不能超出gmae_filed容器*/
  if (one.y <= 0) {
    one.y = 0;
  }

  if (two.y <= 0) {
    two.y = 0;
  }

  if (one.y >= game_height - one.height) {
    one.y = game_height - one.height;
  }

  if (two.y > game_height - two.height) {
    two.y = game_height - two.height;
  }

  /*ball 不能超出gmae_filed容器*/ 
  if (ball.y <= 0 || ball.y >= game_height - ball.height) {
    ball.top = -ball.top;
  }

  /*bar反彈ball*/ 
  if (ball.x <= one.width){//0){//one.elem.offsetWidth - 2) {

    if ( (ball_y_center+2) > one.y && (ball_y_center-2) < one.y + one.height) {
      ball.left = -ball.left;
    } 
    else if(ball.x <= 0){
      clearInterval(interval);
      ball.left = -ball.left;
      two.score++;
      setTimeout(() => game.classList.add('idle'), 500);
      
      document.removeEventListener('keydown', keydownController, false);
      document.removeEventListener('keyup', keyupController, false);
      //start();
    }
  }

  if (ball.x >= (game_width - ball.width - (two.width - 2)) ) {
    if (ball_y_center > two.y && ball_y_center < two.y + two.height) {
      ball.left = -ball.left;
    } else {
      clearInterval(interval);
      ball.left = -ball.left;
      one.score++;
      setTimeout(() => game.classList.add('idle'), 500);
      document.removeEventListener('keydown', keydownController, false);
      document.removeEventListener('keyup', keyupController, false);
      //start();
    }
  }

  checkDOMRebound(commodity1);
  checkDOMRebound(commodity2);

  // /*commodity_card反彈ball*/
  // if( (ball_bottom > commodity_top +2) && (ball.y < commodity_bottom-2) )/*若ball.y在commodity 長度 範圍內*/ 
  // {
  //   if((ball_right >= commodity_left -2) && (ball.x <= commodity_right+2))/*若ball.x在commodity 寬度 範圍內*/ 
  //   {
  //     console.log("in");
  //     ball.x = (ball.left>0) ? (commodity_left - ball_width) : commodity_right;/*ball往右 ： 往左*/
  //     ball.left = -ball.left;
  //     // if (ball.left >0 ){/*ball往右*/
  //     //   ball.x = commodity_left - ball_width;
  //     //   ball.left = -ball.left;
  //     // } else{           /*ball往左*/
  //     //   ball.x = commodity_right;
  //     //   ball.left = -ball.left;
  //     // }
  //   }

  // }else{/*若ball.y在commodit高度 以外（即上下）*/ 

  //   if((ball_right > commodity_left+2) && (ball.x < commodity_right-2))/*若ball.x在commodity 寬度 範圍內*/ 
  //   {
  //     if( (ball_bottom >= commodity_top-2) && (ball.y <= commodity_bottom+2) )/*若ball.y在commodity 高度 範圍內*/ 
  //     {
  //       ball.y = (ball.left>0) ? (commodity_top - ball_height) : commodity_bottom;/*ball往下 ： 往上*/
  //       ball.top = -ball.top;
  //       // if (ball.top >0) {/*ball往下 */
  //       //   ball.y = commodity_top - ball_height;
  //       //   ball.top = -ball.top;
  //       // } else{
  //       //   ball.y = commodity_bottom;
  //       //   ball.top = -ball.top;
  //       // }
  //     }
  //   }

  // }

  one.elem.style.setProperty('--y', one.y + 'px');
  two.elem.style.setProperty('--y', two.y + 'px');
  ball.elem.style.setProperty('--x', ball.x + 'px');
  ball.elem.style.setProperty('--y', ball.y + 'px');

}


function keydownController(e){
  e.preventDefault();
  // init();
  if (e.keyCode == 38 || e.which == 38) {
    one.top = -8;
  }
  else if (e.keyCode == 40 || e.which == 40) {
    one.top = 8;
  }
};

function keyupController(e){
  e.preventDefault();
  // init();
  if (e.keyCode == 38 || e.which == 38) {
    one.top = 0;
  }
  else if (e.keyCode == 40 || e.which == 40) {
    one.top = 0;
  }
};

upButton.onmousedown = e => {
  // init();
  one.top = -8;
};

downButton.onmousedown = e => {
  // init();
  one.top = 8;
};

upButton.onmouseup = e => {
  one.top = 0;
};

downButton.onmouseup = e => {
  one.top = 0;
};

upButton.ontouchstart = e => {
  // init();
  one.top = -8;
};

downButton.ontouchstart = e => {
  // init();
  one.top = 8;
};

upButton.ontouchend = e => {
  one.top = 0;
};

downButton.ontouchend = e => {
  one.top = 0;
};

function checkDOMRebound(element){
  /*commodity_card反彈ball*/
  if( (ball.bottom > element.top +2) && (ball.y < element.bottom-2) )/*若ball.y在commodity 長度 範圍內*/ 
  {
    console.log("in_y:"+element.elem.id);
    if((ball.right >= element.left -2) && (ball.x <= element.right+2))/*若ball.x在commodity 寬度 範圍內*/ 
    {
      ball.x = (ball.left>0) ? (element.left - ball.width) : element.right;/*ball往右 ： 往左*/
      console.log((ball.left>0) ? (element.left - ball.width) : element.right);
      ball.left = -ball.left;
    }

  }else{/*若ball.y在commodit高度 以外（即上下）*/ 

    if((ball.right > element.left+2) && (ball.x < element.right-2))/*若ball.x在commodity 寬度 範圍內*/ 
    {
      console.log("in_x:"+element.elem.id);
      if( (ball.bottom >= element.top-2) && (ball.y <= element.bottom+2) )/*若ball.y在commodity 高度 範圍內*/ 
      {
        ball.y = (ball.top>0) ? (element.top - ball.height) : element.bottom;/*ball往下 ： 往上*/
        ball.top = -ball.top;
        console.log((ball.top>0) ? (element.top - ball.height) : element.bottom);

      }
    }

  }
}