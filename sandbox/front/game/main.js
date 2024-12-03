var app = new Vue({
    el: '#myContainer',
    data: {
        arr2: [],
        counter: null,// вывод на экран числа
        i:1,// счетчик цикда
        timerId: null, // ID Интервала
        timerId2: null, // ID Интервала счетчика
        flag:[
            {btnStart:true, textStart:false, num:false, otvet:false, verno: false, error: false, gameOver:false, gameOver2:false},
            {life1:true, life2:true, life3:true},
        ],
        buttonStart:0,
        buttonStartI:3,
        mayOtvet:null,
        complexity:1,
        levelN: 0,
        level: null,
        level1: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 2, ms:2500, lengthArr:10, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 3, ms:2000, lengthArr:5, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 4, ms:2000, lengthArr:10, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 6, ms:2500, lengthArr:5, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 7, ms:2500, lengthArr:10, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 8, ms:2000, lengthArr:5, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 9, ms:2000, lengthArr:10, minOtv:0, maxOtv:10, minNum: -5, maxNum: 5},
            {id: 10, ms:2000, lengthArr:5, minOtv:0, maxOtv:10, minNum: -10, maxNum: 10},
          ],
        level2: [
            {id: 1, ms:3500, lengthArr:5, minOtv:0, maxOtv:20, minNum: -10, maxNum: 10},
            {id: 2, ms:3500, lengthArr:10, minOtv:0, maxOtv:20, minNum: -10, maxNum: 10},
            {id: 3, ms:3000, lengthArr:5, minOtv:0, maxOtv:20, minNum: -10, maxNum: 10},
            {id: 4, ms:3000, lengthArr:10, minOtv:0, maxOtv:20, minNum: -10, maxNum: 10},
            {id: 5, ms:3500, lengthArr:5, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
            {id: 6, ms:3500, lengthArr:10, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
            {id: 7, ms:3500, lengthArr:15, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
            {id: 8, ms:3500, lengthArr:20, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
            {id: 9, ms:3000, lengthArr:15, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
            {id: 10, ms:3000, lengthArr:20, minOtv:0, maxOtv:20, minNum: -20, maxNum: 20},
        ],
        level3: [
            {id: 1, ms:4500, lengthArr:5, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 2, ms:4500, lengthArr:10, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 3, ms:4000, lengthArr:5, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 4, ms:4000, lengthArr:10, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 5, ms:4500, lengthArr:5, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 6, ms:4000, lengthArr:10, minOtv:0, maxOtv:30, minNum: -20, maxNum: 20},
            {id: 7, ms:4500, lengthArr:5, minOtv:0, maxOtv:30, minNum: -30, maxNum: 30},
            {id: 8, ms:4000, lengthArr:10, minOtv:0, maxOtv:30, minNum: -30, maxNum: 30},
            {id: 9, ms:4500, lengthArr:5, minOtv:0, maxOtv:40, minNum: -30, maxNum: 30},
            {id: 10, ms:3000, lengthArr:10, minOtv:0, maxOtv:40, minNum: -30, maxNum: 30},
        ],
        level4: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:40, minNum: -40, maxNum: 40},
        ],
        level5: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:50, minNum: -50, maxNum: 50},
        ],
        level6: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:60, minNum: -50, maxNum: 50},
        ],
        level7: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:70, minNum: -50, maxNum: 70},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:70, minNum: -70, maxNum: 50},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:70, minNum: -50, maxNum: 70},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:70, minNum: -70, maxNum: 50},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:70, minNum: -50, maxNum: 70},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:70, minNum: -70, maxNum: 50},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:70, minNum: -50, maxNum: 70},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:70, minNum: -70, maxNum: 50},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:70, minNum: -50, maxNum: 70},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:70, minNum: -70, maxNum: 50},
        ],
        level8: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:80, minNum: -80, maxNum: 70},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:80, minNum: -70, maxNum: 80},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:80, minNum: -80, maxNum: 70},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:80, minNum: -70, maxNum: 80},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:80, minNum: -80, maxNum: 70},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:80, minNum: -70, maxNum: 80},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:80, minNum: -80, maxNum: 70},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:80, minNum: -70, maxNum: 80},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:80, minNum: -80, maxNum: 70},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:80, minNum: -70, maxNum: 80},
        ],
        level9: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:90, minNum: -90, maxNum: 90},
        ],
        level10: [
            {id: 1, ms:2500, lengthArr:5, minOtv:0, maxOtv:100, minNum: -80, maxNum: 100},
            {id: 2, ms:2000, lengthArr:5, minOtv:0, maxOtv:100, minNum: -70, maxNum: 80},
            {id: 3, ms:1500, lengthArr:5, minOtv:0, maxOtv:100, minNum: -80, maxNum: 100},
            {id: 4, ms:1000, lengthArr:4, minOtv:0, maxOtv:100, minNum: -70, maxNum: 100},
            {id: 5, ms:3000, lengthArr:10, minOtv:0, maxOtv:100, minNum: -80, maxNum: 70},
            {id: 6, ms:2500, lengthArr:10, minOtv:0, maxOtv:100, minNum: -100, maxNum: 80},
            {id: 7, ms:2000, lengthArr:10, minOtv:0, maxOtv:100, minNum: -80, maxNum: 70},
            {id: 8, ms:900, lengthArr:4, minOtv:0, maxOtv:100, minNum: -100, maxNum: 80},
            {id: 9, ms:2500, lengthArr:5, minOtv:0, maxOtv:100, minNum: -80, maxNum: 70},
            {id: 10, ms:2500, lengthArr:10, minOtv:0, maxOtv:100, minNum: -100, maxNum: 80},
        ],
    },
    mounted() {
        this.level = this.level1
    },
    methods:{
        Counter(){
            this.counter = this.arr2[this.i++]
            if (this.i > this.arr2.length) {
                this.stopGame();
                this.i = 0;
            }

        },
        startGame(){
            this.choosingLevel(this.complexity);
            this.flag[0].btnStart = false;
            this.flag[0].verno = false;
            this.flag[0].error = false;
            this.flag[0].gameOver = false;
            this.flag[0].textStart = true;
            this.mayOtvet = null;
            this.buttonStart = 3;
            this.buttonStartI = 3;
            this.timerId2 = setInterval(this.goText, 1000);
            this.arr2.length = 0; // удаляем все элементы массива

            this.crateArr(this.level[this.levelN].lengthArr,this.level[this.levelN].minOtv,this.level[this.levelN].maxOtv, this.level[this.levelN].minNum, this.level[this.levelN].maxNum);
            // setTimeout(() => {this.startNum(level)},4000);
        },
        stopGame(){
            clearInterval(this.timerId);
            // this.counter = '?';
            this.flag[0].num = false;
            this.flag[0].otvet = true;
        },
        // старт массива цифр
        startNum(level=0){
            //this.choosingLevel(this.complexity);
            this.counter = this.arr2[0]; // первый элемент массива. чтобы небыло задержки
            this.timerId =  setInterval(this.Counter, this.level[level].ms);
        },
        // проверка ответа
        isChek(val, min=0, max=99){
            if (this.arr2.length > 1){
                if (this.arr2[this.arr2.length-2] === this.arr2[this.arr2.length-1]) return false;
            }else if(this.arr2[0] ===0) return false
            if (val >= min && val <= max) return true;
            else return false;
        },
        // генерация случайных чисел в диапазоне от min до max
        getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        },
        sumAllArr(arr){
            let sum = 0;
            arr.forEach(function(num) {
                sum += num;
            });
            return sum;
        },
        /**
         * Создаем массив задачи
         * @param length длина массива
         * @param minOtv минимально возможный ответ
         * @param maxOtv максимально возможный ответ
         * @param minNum минимальное случайное число
         * @param maxNum максимальное случайное число
         */
        crateArr(length=10, minOtv=0, maxOtv=99, minNum=-99, maxNum=99){
            for (let i=0; i<length; i++) {
                do {
                    this.arr2[i] = this.getRandomInt(minNum, maxNum);
                    // alert(this.arr2[i]+' сумма массива:'+this.sumAllArr(this.arr2));
                } while (!this.isChek(this.sumAllArr(this.arr2),minOtv, maxOtv))
            }
        },
        goText(){
            --this.buttonStartI;
            if (this.buttonStartI === 2) this.buttonStart = 2;
            if (this.buttonStartI === 1) this.buttonStart = 1;
            if (this.buttonStartI === 0) this.buttonStart = 'НАЧАЛИ!';
            if (this.buttonStartI === -1)
            {
                this.flag[0].textStart = false;
                this.flag[0].num = true;
                clearInterval(this.timerId2);
                this.startNum(this.levelN)
            }
        },
        otobragenie(counter){
            if (counter > 0) return '+'+counter;
            else return counter;
        },
        // прверка результата
        rez(){
            //this.choosingLevel(this.complexity);

            this.flag[0].otvet = false;
            if (Number(this.mayOtvet) === this.sumAllArr(this.arr2)){
                if (this.levelN === this.level.length-1){
                    this.flag[0].gameOver = true;
                }else {
                this.flag[0].verno = true;
                this.levelN++;
                this.flag[0].btnStart = true
                }
            }else {
                if (this.flag[1].life1 === false && this.flag[1].life2 === false){
                    this.flag[1].life3 = false;
                    this.flag[0].gameOver2 = true;
                }else if (this.flag[1].life1 === false){
                    this.flag[1].life2 = false;
                }else {
                    this.flag[1].life1 = false;
                }
                if (this.flag[1].life1 || this.flag[1].life2 || this.flag[1].life3){
                    this.flag[0].btnStart = true;
                    this.flag[0].error = true;
                }
            }
        },
        sbros(){
            clearInterval(this.timerId2);
            clearInterval(this.timerId);
            this.flag[0].btnStart = true;
            this.flag[0].textStart = false;
            this.flag[0].num = false;
            this.flag[0].otvet = false;
            this.flag[0].verno = false;
            this.flag[0].error = false;
            this.flag[0].gameOver = false;
            this.flag[1].life1 = true;
            this.flag[1].life2 = true;
            this.flag[1].life3 = true;
            this.flag[0].gameOver2 = false;
            this.levelN = 0;
        },
        choosingLevel(complexity){
            switch (Number(complexity)){
                case 1:
                    this.level = this.level1;
                    break;
                case 2:
                    this.level = this.level2;
                    break;
                case 3:
                    this.level = this.level3;
                    break;
                case 4:
                    this.level = this.level4;
                    break;
                case 5:
                    this.level = this.level5;
                    break;
                case 6:
                    this.level = this.level6;
                    break;
                case 7:
                    this.level = this.level7;
                    break;
                case 8:
                    this.level = this.level8;
                    break;
                case 9:
                    this.level = this.level9;
                    break;
                case 10:
                    this.level = this.level10;
                    break;
                default:
                    this.level = this.level1;
            }
        }

    }
});

