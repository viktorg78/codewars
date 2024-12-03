var app = new Vue({
    el: '#myContainer',
    data: {
        gameField: [],
        gameFieldMirror: [],
        renderComponent: true,
        timerId: null,
        n: 1,
        x: 55,
        y: 30,
        buttonStart:false,
        buttonStop:true,
        buttonPause:true,
        generation:0,
    },
    mounted() {
        // создаем игровое поле
        this.gameField = this.createGameField(this.x, this.y);
        this.gameFieldMirror = this.createGameField(this.x, this.y);
    },
    methods: {
        outputCircle(val = 0) {
            switch (val) {
                case 0:
                    return 'circle-fillWhite.svg'; // Пусто
                case 1:
                    return 'circle-fillForestGreen.svg'; // Родился
                case 2:
                    return 'circle-fillGreen.svg'; // 5 лет
                case 3:
                    return 'circle-fillDarkGreen.svg'; // 10 лет
                case 4:
                    return 'circle-fillYellow.svg'; // 15 лет
                case 5:
                    return 'circle-fillRoyalBlue.svg'; // 20 лет (Может рожать)
                case 6:
                    return 'circle-fillBlue.svg'; // 25 лет (Может рожать)
                case 7:
                    return 'circle-fillMediumBlue.svg'; // 30 лет (Может рожать)
                case 8:
                    return 'circle-fillDarkBlue.svg'; // 35 лет (Может рожать)
                case 9:
                    return 'circle-fillNavy.svg'; // 40 лет (Может рожать)
                case 10:
                    return 'circle-fillMidnightBlue.svg'; // 45 лет (Может рожать)
                case 11:
                    return 'circle-fillGrey.svg'; // 50 лет
                case 12:
                    return 'circle-fillDimGrey.svg'; // 55 лет
                case 13:
                    return 'circle-fillLightSlateGrey.svg'; // 60 лет
                case 14:
                    return 'circle-fillSlateGrey.svg'; // 65 лет
                case 15:
                    return 'circle-fillDarkSlateGrey.svg'; // 70 лет
                case 16:
                    return 'circle-fillBlack.svg'; // 75 лет
            }
        },
        setXY(x, y) {
            this.renderComponent = false;
            this.gameField[x][y] = 1;
            this.renderComponent = true;
        },
        createGameField(x, y) {
            let mas = [];
            for (let i = 0; i < y; i++) {
                mas[i] = [];
                for (let j = 0; j < x; j++) {
                    mas[i][j] = 0;
                }
            }
            return mas;
        },
        numberLivingParents(i, j, min=5, max=10) {
            let g = 0;
            if (this.gameField[i - 1][j] >= min && this.gameField[i - 1][j] <= max) g++;
            if (this.gameField[i + 1][j] >= min && this.gameField[i + 1][j] <= max) g++;
            if (this.gameField[i][j - 1] >= min && this.gameField[i][j - 1] <= max) g++;
            if (this.gameField[i][j + 1] >= min && this.gameField[i][j + 1] <= max) g++;
            if (this.gameField[i - 1][j - 1] >= min && this.gameField[i - 1][j - 1] <= max) g++;
            if (this.gameField[i + 1][j + 1] >= min && this.gameField[i + 1][j + 1] <= max) g++;
            if (this.gameField[i - 1][j + 1] >= min && this.gameField[i - 1][j + 1] <= max) g++;
            if (this.gameField[i + 1][j - 1] >= min && this.gameField[i + 1][j - 1] <= max) g++;
            return g;
        },
        numberLiving(i, j) {
            let g = 0;
            if (this.gameField[i - 1][j] > 0) g++;
            if (this.gameField[i + 1][j] > 0) g++;
            if (this.gameField[i][j - 1] > 0) g++;
            if (this.gameField[i][j + 1] > 0) g++;
            if (this.gameField[i - 1][j - 1] > 0) g++;
            if (this.gameField[i + 1][j + 1] > 0) g++;
            if (this.gameField[i - 1][j + 1] > 0) g++;
            if (this.gameField[i + 1][j - 1] > 0) g++;
            return g;
        },
        //в пустой (мёртвой) клетке, с которой соседствуют три живые клетки, зарождается жизнь;
        generation1() {
            const y = this.y;
            const x = this.x;
            this.arr0();
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                    if (this.gameField[i][j] === 0) {
                        //if (this.numberLivingParents(i, j) >= 2) { ражать могут не все покаления
                        if (this.numberLiving(i, j) === 3) { // стандартный подход
                            this.gameFieldMirror[i][j] = 1;
                        }
                    }
                }
            }
            this.renderComponent = false;
            this.joinArr();
            this.renderComponent = true;
        },
        // если у живой клетки есть две или три живые соседки, то эта клетка продолжает жить; в противном случае
        // (если живых соседей меньше двух или больше пяти) клетка умирает («от одиночества» или «от перенаселённости»)
        generation2() {
            const y = this.y;
            const x = this.x;
            this.arr0();
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                    if (this.gameField[i][j] > 0) {
                        //if (this.numberLiving(i, j) >= 2 && this.numberLiving(i, j) <= 5) {
                        if (this.numberLiving(i, j) == 2 || this.numberLiving(i, j) == 3) {  // стандартный подход
                            this.gameFieldMirror[i][j] = 1 //особь выжила
                        } else {
                            this.gameFieldMirror[i][j] = 16 // особь умерла
                        }
                    }

                }
            }
            this.renderComponent = false;
            this.joinArr();
            this.renderComponent = true;
            this.generation++;
            if (this.isEmptyField()) this.stopGame();

        },

        stopGame() {
            this.buttonStart = false;
            this.buttonPause = true;
            this.buttonStop = true;
            clearInterval(this.timerId);
            const y = this.y;
            const x = this.x;
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                    this.renderComponent = false;
                    if (this.gameField[i][j] !== 0) this.gameField[i][j] = 0;
                    this.renderComponent = true;
                }
            }
        },
        startGame() {
            this.generation = 0;
            this.buttonStart = true;
            this.buttonPause = false;
            this.buttonStop = false;
            this.timerId = setInterval(this.bodyGame, 600);
        },
        bodyGame() {
            this.generation1();
            setTimeout(this.generation2, 200);
        },
        pauseGame() {
            clearInterval(this.timerId);
            this.buttonStart = false;
            this.buttonPause = true;
        },
        joinArr() {
            const y = this.y;
            const x = this.x;
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                    this.gameField[i][j] += this.gameFieldMirror[i][j];
                    if (this.gameField[i][j] > 16) this.gameField[i][j] = 0;
                }
            }
        },
        arr0() {
            const y = this.y;
            const x = this.x;
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                    this.gameFieldMirror[i][j] = 0;
                }
            }
        },
        isEmptyField(){
           return this.sumAllArr(this.gameField) <= 0;
        },
        sumAllArr(){
            const y = this.y;
            const x = this.x;
            let sum = 0
            for (let i = 1; i < y - 1; i++) {
                for (let j = 1; j < x - 1; j++) {
                   sum += this.gameFieldMirror[i][j];
                }
            }
            return sum;
        },
    },
});

