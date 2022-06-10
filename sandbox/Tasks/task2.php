<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="Css/main.css">
    <title>заявка на представления опыта педагога</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
заявка на представления опыта педагога
<div>
    <form
        id="app"
        @submit="checkForm"
        action="https://vuejs.org/"
        method="post"
        novalidate="true"
        >
        <b>Информация об авторе</b><br>
        <p v-if="errors.length">
            <b>Пожалуйста исправьте указанные ошибки:</b>
        <ul>
            <li v-for="error in errors">{{ error }}</li>
        </ul>
        </p>
        <p>
            <label for="fio">Ф.И.О.:</label>
        <input
                id = "fio"
                v-model="fio"
                type="text"
                name="fio"
        >
        </p>
        <p>
            <label for="jobTitle">Должность, придмет: </label>
            <input
                    id = "jobTitle"
                    v-model="jobTitle"
                    type="text"
                    name="jobTitle"
            >
        </p>

        <p>
            <label for="educationalOrganization">Образовательная организация:</label>
            <input
                    id = "educationalOrganization"
                    v-model="educationalOrganization"
                    type="text"
                    name="educationalOrganization"
            >
        </p>

        <p>
            <label for="municipality">Муниципальное образование:</label>
            <input
                    id = "municipality"
                    v-model="municipality"
                    type="text"
                    name="municipality"
            >
        </p>

        <p>
            <label for="contactPhoneNumber">Контактный номер телефона:</label>
            <input
                    id = "contactPhoneNumber"
                    v-model="contactPhoneNumber"
                    type="text"
                    name="contactPhoneNumber"
            >
        </p>

        <p>
            <label for="emailAddress">Адресс электронной почты:</label>
            <input
                    id = "emailAddress"
                    v-model="emailAddress"
                    type="email"
                    name="emailAddress"
            >
        </p>

        <p>
            <label for="consentProcessingPD">Загрузить согласие на обработку ПД:</label>
            <input
                   id = "consentProcessingPD"
                   type="file"
                   name="consentProcessingPD"
            >
        </p>

        <b>Информация о публикации</b><br>

        <p>
            <label for="chapter">Раздел:</label>
            <select
                    id = "chapter"
                    v-model="chapter"
                    name="chapter"
            >
                <option>Пункт 1</option>
                <option>Пункт 2</option>
            </select>
        </p>

        <p>
            <label for="subsection">Подраздел:</label>
            <select>
                <option>Пункт 1</option>
                <option>Пункт 2</option>
            </select>
        </p>

        <p>
            <label for="BPICategory:">Категория БПИ:</label>
            <select>
                <option>Пункт 1</option>
                <option>Пункт 2</option>
            </select>
        </p>

        <p>
            <label for="BPISubcategory">Подкатегория БПИ:</label>
            <select>
                <option>Пункт 1</option>
                <option>Пункт 2</option>
            </select>
        </p>

        <p>
            <label for="substantialDirection">Содержательное направление:</label>
            <select>
                <option>Пункт 1</option>
                <option>Пункт 2</option>
            </select>
        </p>

        <p>
            <label for="materialName">Название материала:</label>
            <input
                    id = "materialName"
                    type="text"
                    name="materialName"
            >
        </p>

        <p>
            <label for="keywords">ключевые слова:</label>
            <input
                    id = "keywords"
                    type="text"
                    name="keywords"
            >
        </p>

        <p>
            <label for="annotation">Анатация:</label>
            <input
                    id = "annotation"
                    type="text"
                    name="annotation"
            >
        </p>

        <p>
            <label for="structureProposedExperience">Cтруктура предлогаемого опыта:</label>
            <input
                    id = "structureProposedExperience"
                    type="text"
                    name="structureProposedExperience"
            >
        </p>

        <p>
            <label for="downloadMaterial">Загрузить материал:</label>
            <input
                    id = "downloadMaterial"
                    type="file"
                    name="downloadMaterial"
            >
        </p>

        <p>
            <label for="downloadPreview:">Загрузить превью:</label>
            <input
                    id = "downloadPreview"
                    type="file"
                    name="downloadPreview"
            >
        </p>

        <p>
            <input
            type="submit"
            value="отправит заявку">
        </p>
    </form>
</div>

<script>
    const app = new Vue({
        el: '#app',
        data: {
            errors: [],
            fio: null,
            emailAddress: null,
        },
        methods: {
            checkForm: function (e) {

                this.errors = [];

                if (!this.fio) {
                    this.errors.push('Требуется указать Ф.И.О.');
                }
                if (!this.emailAddress) {
                    this.errors.push('Укажите электронную почту.');
                } else if (!this.validEmail(this.emailAddress)) {
                    this.errors.push('Укажите корректный адрес электронной почты.');
                }

                if(!this.errors.length){
                    return true;
                }

                e.preventDefault();
            },
            validEmail: function (email){
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
        }
    })
</script>
</body>
</html>

