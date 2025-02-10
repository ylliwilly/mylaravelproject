
    // 获取 canvas 元素并设置上下文
    const rocks = document.querySelectorAll('canvas.rock');
    // const ctx = canvas.getContext('2d');

    // 石头的形状生成函数
    function drawSmoothStoneShape(rock) {
        var ctx = rock.getContext('2d');
        ctx.clearRect(0, 0, rock.width, rock.height);  // 清除画布

        // 定义画布的宽度和高度
        const rocksWidth = rock.width;
        const rocksHeight = rock.height;

        // 定义中心点
        const centerX = rocksWidth / 2;
        const centerY = rocksHeight / 2;
        const maxRadiusX = rocksWidth / 2.1;
        const maxRadiusY = rocksHeight / 2.1;

        // 设置随机填充颜色，模拟石头的颜色
        const stoneColor = `hsl(${150+Math.random() * 30}, ${Math.random() * 20}%, ${50+Math.random() * 30}%)`;
        // 創建放射狀漸層
        const gradient = ctx.createRadialGradient(centerX, centerY, 200, centerX, centerY, maxRadiusX);
        // 設定漸層顏色：從黑色（陰影）到透明
        gradient.addColorStop(0, stoneColor); // 中心較深的陰影
        gradient.addColorStop(1, 'hsl(156, 34%, 36%, 100%)');   // 外圍透明

        ctx.fillStyle = gradient;
        ctx.strokeStyle = `hsl(${50+Math.random() * 200}, ${20+Math.random() * 100}%, ${20+Math.random() * 10}%)`;
        
        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 10;
        ctx.shadowBlur = Math.random() * 10;
        ctx.shadowColor = "hsl(207, 34%, 36%, 40%)";

        // 定义石头形状的边数和随机变化
        const numVertices = Math.floor(Math.random() * 15) + 15; // 20 到 40 个顶点
        const noiseLevel = 50;  // 控制顶点位置的随机性

        // 顶点数组
        const vertices = [];

        // 生成每个顶点坐标
        for (let i = 0; i < numVertices; i++) {
            const angle = ( (i+Math.random()) / numVertices) * 2 * Math.PI;  // 均匀分布顶点
            const randomOffsetX = (Math.random()-0.5) * noiseLevel;// - (noiseLevel / 2);
            const randomOffsetY = (Math.random()-0.5) * noiseLevel;// - (noiseLevel / 2);

            const x = centerX + (maxRadiusX + randomOffsetX) * Math.cos(angle);
            const y = centerY + (maxRadiusY + randomOffsetY) * Math.sin(angle);
            vertices.push({ x, y });
        }

        // 开始绘制路径
        ctx.beginPath();

        // 使用二次贝塞尔曲线来连接顶点，确保图形更加平滑
        ctx.moveTo(vertices[0].x, vertices[0].y);  // 起点

        for (let i = 1; i < vertices.length; i++) {
            const prevVertex = vertices[i - 1];
            const currVertex = vertices[i];

            // 控制点，生成在当前点和前一个点的中间位置，使得曲线平滑
            const controlX = (prevVertex.x + currVertex.x) / 2;
            const controlY = (prevVertex.y + currVertex.y) / 2;

            // 使用二次贝塞尔曲线绘制平滑过渡
            ctx.quadraticCurveTo(prevVertex.x, prevVertex.y, controlX, controlY);
        }

        // 回到第一个顶点，完成形状
        const lastVertex = vertices[vertices.length - 1];
        const firstVertex = vertices[0];
        const controlX = (lastVertex.x + firstVertex.x) / 2;
        const controlY = (lastVertex.y + firstVertex.y) / 2;
        ctx.quadraticCurveTo(lastVertex.x, lastVertex.y, controlX, controlY);

        // 闭合路径并填充石头形状
        ctx.closePath();
        ctx.fill();

        // 给石头形状添加边界线
        // ctx.strokeStyle = "black";
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    (() => {
        for(let i=0; i<rocks.length; i++){
            // 调用函数生成平滑石头形状
            drawSmoothStoneShape(rocks[i]);
        }
    })();
