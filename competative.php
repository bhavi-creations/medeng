<?php include 'navbar.php';  ?>


<style>
    form {
        width: 100%;
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f3f3f3;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .error {
        color: red;
        font-size: 14px;
        display: none;
        margin-top: 5px;
    }

    button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        form {
            padding: 15px;
        }

        input,
        textarea,
        button {
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        form {
            padding: 10px;
        }

        input,
        textarea,
        button {
            font-size: 14px;
        }

        label {
            font-size: 14px;
        }
    }
</style>

<div class="aboutmainimage">
    <img src="img/new our course.png" alt="" width="100%" class="img-fluid">
</div>

<div class="row">
    <div class="col-md-9 col-12">
    <form id="studentForm" onsubmit="return validateForm()"  action="contactform.php" method="post" role="form" class="php-email-form"
    data-aos-delay="100">
    <label for=" name">Name*</label>
    <input type="text" id="name" name="name">
    <div class="error" id="errorName">Please enter your name</div>

    <label for="parent">Father/Mother Name*</label>
    <input type="text" id="parent" name="parent">
    <div class="error" id="errorParent">Please enter father/mother name</div>

    <label for="primary">Primary Number*</label>
    <input type="text" id="primary" name="primary">
    <div class="error" id="errorPrimary">Please enter primary number</div>

    <label for="secondary">Secondary Number</label>
    <input type="text" id="secondary" name="secondary">

    <label for="school">School Name*</label>
    <input type="text" id="school" name="school">
    <div class="error" id="errorSchool">Please enter school name</div>

    <label for="address">Address*</label>
    <textarea id="address" name="address"></textarea>
    <div class="error" id="errorAddress">Please enter address</div>

    <label for="remarks">Remarks</label>
    <textarea id="remarks" name="remarks"></textarea>

    <button type="submit">Submit</button>
</form>
    </div>
</div>

<script>
    function validateForm() {
        let isValid = true;

        // Get field values
        const name = document.getElementById("name").value.trim();
        const parent = document.getElementById("parent").value.trim();
        const primary = document.getElementById("primary").value.trim();
        const school = document.getElementById("school").value.trim();
        const address = document.getElementById("address").value.trim();

        // Clear all error messages
        document.querySelectorAll(".error").forEach(el => el.style.display = "none");

        // Validate required fields
        if (!name) {
            document.getElementById("errorName").style.display = "block";
            isValid = false;
        }

        if (!parent) {
            document.getElementById("errorParent").style.display = "block";
            isValid = false;
        }

        if (!primary) {
            document.getElementById("errorPrimary").style.display = "block";
            isValid = false;
        }

        if (!school) {
            document.getElementById("errorSchool").style.display = "block";
            isValid = false;
        }

        if (!address) {
            document.getElementById("errorAddress").style.display = "block";
            isValid = false;
        }

        return isValid;

    }


    <?php include "footer.php";