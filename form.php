<?php include 'navbar.php';  ?>


<div class="container my-4">
    <!-- <div class="aboutmainimage mb-4">
        <img src="img/new our course.png" alt="Our Course" class="img-fluid w-100">
    </div> -->
    <h1 class="center-heading">Entrance Exam</h1>

    <form id="studentForm" onsubmit="return validateForm()" action="contactform.php" method="post" class="bg-light p-4 rounded shadow">
        <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input type="text" class="form-control" id="name" name="name">
            <div class="text-danger small d-none" id="errorName">Please enter your name</div>
        </div>

        <div class="mb-3">
            <label for="parent" class="form-label">Father/Mother Name*</label>
            <input type="text" class="form-control" id="parent" name="parent">
            <div class="text-danger small d-none" id="errorParent">Please enter father/mother name</div>
        </div>

        <div class="mb-3">
            <label for="primary" class="form-label">Primary Number*</label>
            <input type="text" class="form-control" id="primary" name="primary">
            <div class="text-danger small d-none" id="errorPrimary">Please enter primary number</div>
        </div>

        <div class="mb-3">
            <label for="secondary" class="form-label">Secondary Number</label>
            <input type="text" class="form-control" id="secondary" name="secondary">
        </div>

        <div class="mb-3">
            <label for="school" class="form-label">School Name*</label>
            <input type="text" class="form-control" id="school" name="school">
            <div class="text-danger small d-none" id="errorSchool">Please enter school name</div>
        </div>
        <div class="mb-3">
            <label for="marks" class="form-label">SSC Total Marks*</label>
            <textarea class="form-control" id="marks" name="marks" rows="3"></textarea>
            <div class="text-danger small d-none" id="errorMarks">Please enter Marks</div>
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Inter Group*</label>
            <textarea class="form-control" id="group" name="group" rows="3"></textarea>
            <div class="text-danger small d-none" id="errorGroup">Please enter Your Intrested Group</div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address*</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            <div class="text-danger small d-none" id="errorAddress">Please enter address</div>
        </div>

        <div class="mb-3">
            <label for="remarks" class="form-label">Remarks</label>
            <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function validateForm() {
        let isValid = true;

        // Get field values
        const name = document.getElementById("name").value.trim();
        const parent = document.getElementById("parent").value.trim();
        const primary = document.getElementById("primary").value.trim();
        const school = document.getElementById("school").value.trim();
        const marks = document.getElementById("marks").value.trim();
        const group = document.getElementById("group").value.trim();
        const address = document.getElementById("address").value.trim();
        
        // Hide all errors
        document.querySelectorAll(".text-danger").forEach(el => el.classList.add("d-none"));

        if (!name) {
            document.getElementById("errorName").classList.remove("d-none");
            isValid = false;
        }
        if (!parent) {
            document.getElementById("errorParent").classList.remove("d-none");
            isValid = false;
        }
        if (!primary) {
            document.getElementById("errorPrimary").classList.remove("d-none");
            isValid = false;
        }
        if (!school) {
            document.getElementById("errorSchool").classList.remove("d-none");
            isValid = false;
        }
        if (!marks) {
            document.getElementById("errorMarks").classList.remove("d-none");
            isValid = false;
        } if (!group) {
            document.getElementById("errorGroup").classList.remove("d-none");
            isValid = false;
        }
        if (!address) {
            document.getElementById("errorAddress").classList.remove("d-none");
            isValid = false;
        }

        return isValid;
    }
</script>



<?php include "footer.php";
