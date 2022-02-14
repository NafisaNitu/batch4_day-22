<?php include "pages/includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="text-capitalize"><h3>Calculator</h3></div>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="first_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="last_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Options</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="option" value="+"> add</label>
                                    <label for=""><input type="radio" name="option" value="-"> sub</label>
                                    <label for=""><input type="radio" name="option" value="*"> mul</label>
                                    <label for=""><input type="radio" name="option" value="/"> div</label>
                                    <label for=""><input type="radio" name="option" value="%"> mod</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" value="<?php echo isset($result) ? $result :'' ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="Get result" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "pages/includes/footer.php"; ?>
