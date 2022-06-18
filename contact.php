<section id="formdemo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="col-sm-offset-4"></div>
                <div class="col-sm-4">
                    <form action="savequery.php" method="POST">
                        <h2 class="text-center">
                            Get in Touch With Us
                        </h2>
                        <input type='text' id='name' name="name" class="form-control" placeholder="Name">
                        <input type='text' id='email' name="email" class="form-control" placeholder="Email Address">
                        <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number">
                        <select name="uan-verify" id="select" class="form-control">
                            <option value="no" selected>Do you know your UAN Number?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
						<textarea type='text' id='comment' name="comment" class="form-control" placeholder="State your Query"></textarea>

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <br>
                    </form>
                </div>
                <div class="col-sm-offset-4"></div>


            </div>
        </div>
    </div>
</section>