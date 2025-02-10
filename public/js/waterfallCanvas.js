var screenWidth = window.innerWidth;
var screenHeight = window.innerHeight;

const canvas = document.getElementById("waterfallCanvas");
const ctx = canvas.getContext("2d");

// 瀑布属性
const waterfallWidth = screenWidth*0.95;
const waterfallX = screenWidth*0.06; ;//canvas.width / 2 - waterfallWidth / 2;
const waterfallY = 0;
const waterfallHeight = screenHeight * 0.5;
let waterParticles = [];

// 创建水滴粒子的函数
function createWaterParticles() {
    for (let i = 0; i < 5; i++) {
        waterParticles.push({
            x: waterfallX + Math.random() * waterfallWidth, // 随机 X 坐标
            y: waterfallY,
            speedY:Math.random() * 2 + 5, // 随机下落速度
            alpha: Math.random() * 0.3 + 0.3, // 随机透明度
            sizeX: Math.random() * 2, // 水滴的宽
            sizeY: Math.random() * 200 + 10 // 水滴的高，长条形
        });
    }
}

// 绘制瀑布
function drawWaterfall() {
    // 清除之前的绘图
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // 绘制水滴粒子
    for (let i = 0; i < waterParticles.length; i++) {
        let p = waterParticles[i];
        ctx.fillStyle = `rgba(255, 255, 255, ${p.alpha})`; // 半透明白色
        
        // 绘制长条水滴，模拟流动感
        ctx.beginPath();
        ctx.ellipse(p.x, p.y, p.sizeX, p.sizeY, 0, 0, Math.PI * 2);
        ctx.fill();
        p.y += p.speedY; // 让水滴下落

        // 如果水滴到达底部，则重置到顶部
        if (p.y > waterfallY + waterfallHeight) {
            p.y = waterfallY;
            p.x = waterfallX + Math.random() * waterfallWidth; // 随机 X 坐标
        }
    }

    // 不断添加新粒子以保持流动
    if (waterParticles.length < 150) {
        createWaterParticles();
    }
}

// 动画循环
function animate() {
    drawWaterfall();
    requestAnimationFrame(animate);
}

// 启动动画
animate();