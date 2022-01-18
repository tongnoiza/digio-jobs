var player = 0;
var i, l, cx = 0, co = 0, xver = 0, over = 0, draw = 0, xx = 0, oo = 0, pre = 0, row = 0, xv = 0, ov = 0;
var x = [], o = []
// ฟังชั่นนี้จะทำการสร้างมิติของอาเรย์ ตามขนาดตารางxo โดย push [] เข้าไปตามค่าที่ได้รับ
function createsize(size) {
  for (let s = 0; s < size; s++) {
    x.push([])
  }
  console.log("ขนาด อาเรย์ " + x.length)
}
// รับค่า กด ตามแถวและคอลัมน์
 function xo(r,c) {
  // toggle สลับ x o 
  if (player == 0) {
    player = 1;
    i = document.getElementById("xo" + r + c).value = "X";
    x[r][c] = i;
    document.getElementById("xo" + r + c).disabled = true;
  } else {
    i = document.getElementById("xo" + r + c).value = "O";
    x[r][c] = i;
    document.getElementById("xo" + r + c).disabled = true;
    player = 0;
  }

  // ตรวจสอบผลเสมอ
  for (let rr = 0; rr < x.length; rr++) {
    for (let j = 0; j < x.length; j++) {
      if (x[rr][j] === "X") cx++;
      if (x[j][rr] === "X") xver++;
      if (x[rr][j] == "X") draw++;
      else if (x[rr][j] == "O") draw++;
      console.log("ช่องว่าง " + draw);
      if (draw == x.length * x.length){
         alert("เสมอ")
         window.location.href = 'savestatus.php?c=draw';
      }
      if (cx === x.length) {
        alert("X WIN")
        cx = 0;
        co = 0;
        window.location.href = 'savestatus.php?c=X_win';
      } else if (xver === x.length) {
        window.location.href = 'savestatus.php?c=O_win';
        alert("O WIN")
      }
    }
    xver = 0;
    cx = 0;
  }
  draw = 0;

  // ตรวจสอบจากซ้ายเฉียงลงมาขวาล่าง โดยการอ้างอิงอินเด็กอาเรย์
  for (let index = 0; index < x.length; index++) {
    if (x[index][index] == "X") xv++;
    else if (x[index][index] == "O") ov++;
    if (xv == x.length) {
      alert("X WIN")
      window.location.href = 'savestatus.php?c=X_win';
    }
    if (ov == x.length){
       alert("O WIN")
       window.location.href = 'savestatus.php?c=O_win';
    }
  }
  xv = 0;
  ov = 0;

  // ตรวจจากล่างซ้ายขึ้นขวาบน แนวทะแยง
  colxo = x.length - 1;
  for (let rowxo = 0; rowxo < x.length; rowxo++) {
    if (x[rowxo][colxo] === "X") {
      xx++
    } else if (x[rowxo][colxo] === "O") { oo++ }
    console.log("colxo : " + colxo + " OO " + oo + " XX" + xx)
    if (xx == x.length){
      alert("X WIN"); 
       window.location.href = 'savestatus.php?c=X_win';
    } 
    if (oo == x.length) {
      alert("O WIN")
      window.location.href = 'savestatus.php?c=O_win';
    }
    colxo--;
  }
  // reset ค่าตัวแปร
  xx = 0;
  oo = 0;
  colxo = 0;
//ตรวจสอบ O มีค่าเท่ากับขนาดของอาเรย์หรือไม่
  for (let cho = 0; cho < x.length; cho++) {
    for (let chov = 0; chov < x.length; chov++) {
      if (x[cho][chov] === "O") co++;
      if (x[chov][cho] === "O") over++;
      if (co === x.length) {
        alert("O win")
        window.location.href = 'savestatus.php?c=O_win';
      }
      if (over === x.length) {
        window.location.href = 'savestatus.php?c=O_win';
        alert("O win")
      }
    }
    over = 0;
    co = 0;
  }

}



  

  

