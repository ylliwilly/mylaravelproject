    function initGL() {
        var canvas = document.getElementById('main_building');  
        var gl = canvas.getContext('webgl');
        var width = window.innerWidth;
        var height = window.innerHeight;
        
        canvas.width = width;
        canvas.height = height;
        
        gl.viewport(0,0, gl.drawingBufferWidth, gl.drawingBufferHeight);
        gl.clearColor(0,1,1,1);
        
        window.addEventListener('resize', function() {
            gl.viewport(0,0, gl.drawingBufferWidth, gl.drawingBufferHeight);
        });
        
        return gl;
    }
  
    function draw(gl) {
        gl.clear(gl.COLOR_BUFFER_BIT);
        gl.drawArrays(gl.POINTS, 0, 3); //三個點的座標是從 buffer 當中依照順序拿取
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

        var points = gl.getAttribLocation(program, "position");
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
        var gl = initGL();
        initShaders(gl)
        draw(gl);
    }

    main();