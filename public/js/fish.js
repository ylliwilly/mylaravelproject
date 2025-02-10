
var screenWidth = window.innerWidth;
var screenHeight = window.innerHeight;

const fish = document.querySelectorAll(".fish");
const fish_list = [
                    [2000,500],
                    [300,300],
                    [1000,800]
                ];

const timeoutFISH = window.setInterval(( () =>{

    for(let i=0; i<fish.length; i++){
        
        let swim_x = Math.floor(Math.random() * screenWidth);
        let swim_y = Math.floor(Math.random() * screenHeight);

        changePosition(i, swim_x, swim_y);
    }
    
}), 3000);

function angleBetweenVectors(A, B) {
    const [Ax, Ay] = A;
    var [Bx, By] = B;
    Bx = Bx-Ax, By = By-Ay;

    // 1. 计算点积 A · B = Ax * Bx + Ay * By
    // const dotProduct = Ax * Bx + Ay * By;
    const dotProduct = -Bx;

    // 2. 计算模长 |A| 和 |B|
    // const magnitudeA = Math.sqrt(Ax ** 2 + Ay ** 2);
    const magnitudeA = Math.sqrt(1);
    const magnitudeB = Math.sqrt(Bx ** 2 + By ** 2);

    // 3. 计算 cos(θ)
    const cosTheta = dotProduct / (magnitudeA * magnitudeB);

    // 4. 计算夹角大小 (0° 到 180°)
    let theta = Math.acos(cosTheta) * (180 / Math.PI); // 转换为角度

    // 5. 计算叉积 A × B = Ax * By - Ay * Bx
    // const crossProduct = Ax * By - Ay * Bx;
    const crossProduct = -By;

    // 6. 判断角度的方向
    if (crossProduct < 0 && theta < 180) {
        // 顺时针，角度为 360° - theta
        theta = 360 - theta;
        // theta = -theta;
    }

    return theta;
}

// 示例向量 A 和随机向量 B

// const angle = angleBetweenVectors([500,500], [1000,1000]);
// console.log(`角度差: ${angle}°`);

function changePosition(index, swim_x, swim_y){
    let target_fish = fish[index];
    let now_rotate = parseInt( target_fish.style.rotate.replace("deg","") );

    let change_rotate = angleBetweenVectors(fish_list[index], [swim_x, swim_y]);

    if( Math.abs(change_rotate-now_rotate) < 180){
        target_fish.style.setProperty("--wave-time", "1s");  

        target_fish.style.rotate =  change_rotate+"deg";
        target_fish.style.setProperty("--swim-x", swim_x+"px");
        target_fish.style.setProperty("--swim-y", swim_y+"px");  

        fish_list[index][0] = swim_x;
        fish_list[index][1] = swim_y;
        // console.log("change_rotate ",index," to ",change_rotate,"deg");

        // setTimeout(() => {
        //     target_fish.style.setProperty("--wave-time", swim_x/screenWidth*10+"s");
        // }, 3000);
    } else{
        target_fish.style.setProperty("--wave-time", swim_x/screenWidth*20+"s");

        // console.log("fail:",index,",rotate:",Math.abs(change_rotate-now_rotate),"deg");
    }
    
}   