    /**
     * 1.特定格式
    */
    //我們會把一種特定格式的程式（program）傳送到 GPU 上，在『畫』的動作時執行，
    // 這段程式稱為 shader，而且分成 vertex（頂點）及 fragment（片段）兩種 shader

    // vertex shader 負責計算每個形狀（通常是三角形）的每個頂點在畫布上的位置
    // fragment shader 負責計算填滿形狀時每個 pixel 使用的顏色，
    // vertex shader、fragment shader兩者組成這個所謂特定格式的程式

    /**
     * 2.傳送到GPU上
    */
    //在 shader 中的資料稱作attribute，透過 buffer 來傳送到 GPU 上

    /**
     * 3.GPU處理
     */
    // 每次執行只會從 buffer 中拿出對應的片段作為 attribute
    // 首先 vertex shader，每執行一次產生一個頂點，GPU 把每三個頂點組成三角形（模式是三角形的話），接著點陣化（rasterization）以對應螢幕的 pixel
    // 最後為每個 pixel 分別執行 fragment shader


    /* 旋轉效果 START */
    let angleX = 0, angleY = 0;
    let isDragging = false;
    let prevX = 0, prevY = 0;

    function setupMouse(canvas) {
        canvas.addEventListener('mousedown', (e) => {
            isDragging = true;
            prevX = e.clientX;
            prevY = e.clientY;
        });

        canvas.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            let dx = e.clientX - prevX;
            let dy = e.clientY - prevY;
            prevX = e.clientX;
            prevY = e.clientY;
            angleY += dx * 0.01;
            angleX += dy * 0.01;
            angleX = Math.max(-Math.PI / 2, Math.min(Math.PI / 2, angleX));
        });

        canvas.addEventListener('mouseup', () => isDragging = false);
        canvas.addEventListener('mouseleave', () => isDragging = false);
    }

    function getMVPMatrix(angleX, angleY, canvas) {
        let model = mat4.create();
        let view = mat4.create();
        let proj = mat4.create();
        let mvp = mat4.create();

        let radius = 5;
        let eye = [
            radius * Math.sin(angleY) * Math.cos(angleX),
            radius * Math.sin(angleX),
            radius * Math.cos(angleY) * Math.cos(angleX)
        ];
        let center = [0, 0, 0];
        let up = [0, 1, 0];

        mat4.lookAt(view, eye, center, up);
        mat4.perspective(proj, Math.PI / 4, canvas.width / canvas.height, 0.1, 100);
        mat4.multiply(mvp, view, model);
        mat4.multiply(mvp, proj, mvp);

        return mvp;
    }

    function createBuilding(gl, program) {
        const cube = [
            // 6 面 x 2 三角形 x 3 頂點
            // Front
            -1,-1, 1,  1,-1, 1,  1, 1, 1,
            -1,-1, 1,  1, 1, 1, -1, 1, 1,
            // ...後面略，可參考我上面提供的 cube data
        ];

        const buffer = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, buffer);
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(cube), gl.STATIC_DRAW);

        const position = gl.getAttribLocation(program, "position");
        gl.enableVertexAttribArray(position);
        gl.vertexAttribPointer(position, 3, gl.FLOAT, false, 0, 0);
    }
    /* 旋轉效果 END */

    function initGL() {
        var canvas = document.getElementById('main_building');  
        var gl = canvas.getContext('webgl');

        var width = window.innerWidth;
        var height = window.innerHeight;
        
        canvas.width = width;
        canvas.height = height;
        
        gl.viewport(0,0, gl.drawingBufferWidth, gl.drawingBufferHeight);
        gl.clearColor(0,1,1,1); //設定清除用的顏色 gl.clearColor(red, green, blue, alpha)
        
        window.addEventListener('resize', function() {
            gl.viewport(0,0, gl.drawingBufferWidth, gl.drawingBufferHeight);
        });
        
        return gl;
    }
  
    function draw(gl) {
        let u_MVPMatrix = gl.getUniformLocation(program, "u_MVPMatrix");
        let mvp = getMVPMatrix(angleX, angleY, canvas);
        gl.uniformMatrix4fv(u_MVPMatrix, false, mvp);

        gl.clear(gl.COLOR_BUFFER_BIT | gl.DEPTH_BUFFER_BIT); // gl.COLOR_BUFFER_BIT 是用來指定清除顏色的部份
        gl.drawArrays(gl.TRIANGLES, 0, 36); //三個點的座標是從 buffer 當中依照順序拿取
    }

    function createShaders(gl, type) {
        var shaderScript = '';
        var shader;

        switch(type) {
            case 'fragment':
                shaderScript = document.getElementById('shader-fs').textContent;
                shader = gl.createShader(gl.FRAGMENT_SHADER);

                break;
            case 'vertex':
                shaderScript = document.getElementById('shader-vs').textContent;
                shader = gl.createShader(gl.VERTEX_SHADER);

                break;
        }

        gl.shaderSource(shader, shaderScript);
        gl.compileShader(shader);

        return shader;
    }

    // 位置及顏色
    function createPoints(gl, program) {
        var verteices = [
            0.9, -0.9,0.0,
            -0.9, 0.9, 0.0,
            0.0,0.9,0.0
        ];

        // Buffer 代表代表緩衝區，能夠將一連串的資料傳入 GPU，繪圖時如果有需要時可以隨時取用。
        // 我們現在有了三個點座標，現在將它放入 buffer 當中
        // gl.STATIC_DRAW 參數告訴 WebGL 我們打算如何使用數據
        var buffer = gl.createBuffer();
        gl.bindBuffer(gl.ARRAY_BUFFER, buffer); //gl.bindBuffer(target, buffer)綁定到該數組緩衝區目標，並使用它
        gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(verteices), gl.STATIC_DRAW); //將數據放入緩衝區

        var points = gl.getAttribLocation(program, "position"); // gl.getAttribLocation 可以取得 attribute 在 program 中的位置（找不到的時候這個數字會是 -1）
        var size = gl.getAttribLocation(program, "size");
        
        gl.vertexAttrib3f(points, 0, 0, 0);
        gl.vertexAttrib1f(size, 100.0);

        // gl.vertexAttrib3f(points, 0, 0, 0);
        // 使用 gl.vertexAttribPointer 來指向指標
        // 我們需要告訴它，每個頂點將有三個值 X，Y，Z ，它們是浮點數。
        // 後面三個參數分別為 normalized, type stride
        gl.vertexAttribPointer(points, 3, gl.FLOAT, false, 0 , 0);
        gl.enableVertexAttribArray(points);
        
        gl.vertexAttrib1f(size, 100.0);
        
        var color = gl.getUniformLocation(program, "color");
        gl.uniform4f(color, 0,1,0,1);
    }

    function initShaders(gl) {
        var vertexShader = createShaders(gl, 'vertex');
        var fragmentShader = createShaders(gl, 'fragment');

        var shaderProgram = gl.createProgram();
        gl.attachShader(shaderProgram, vertexShader);
        gl.attachShader(shaderProgram, fragmentShader);
        gl.linkProgram(shaderProgram);
        gl.useProgram(shaderProgram);
    }

    function main() {
        const gl = initGL();
        const program = initShaders(gl);
        createBuilding(gl, program); // ← 你把建築畫進來
        setupMouse(gl.canvas);       // ← 加入滑鼠控制

        function loop() {
            draw(gl, program, gl.canvas);
            requestAnimationFrame(loop);
        }
        loop();
    }

    main();