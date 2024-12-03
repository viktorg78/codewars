var app = new Vue({
    el: '#myContainer',
    data: {
        x: 10,
        y: 28,
        gameField: [],
        gameFieldMin: [],
        renderComponent: true,
    },
    mounted() {
        this.gameField = this.createGameField(this.x, this.y);
        this.gameFieldMin = this.createGameField(5,5);
    },
    methods:{
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

    },

});

