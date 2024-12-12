<!-- contact-modal.php -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form action="successformcontact.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="first_name" placeholder="Name" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="last_name" placeholder="Phone" required maxlength="10">
                            </div>
                            <div class="col-lg-12">
                                <select name="product" required>
                                    <option value="">Select a Product</option>
                                    <option value="Western Steel (GI)">Western Steel (GI)</option>
                                    <option value="Western Galvalume">Western Galvalume</option>
                                    <option value="Western Frame (GI)">Western Frame (GI)</option>
                                    <option value="Western Threaded Rod System">Western Threaded Rod System</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Gypsum Plaster">Gypsum Plaster</option>
                                    <option value="Smart Wall Putty">Smart Wall Putty</option>
                                    <option value="Classic Bond">Classic Bond</option>
                                    <option value="Western Gypsum Board">Western Gypsum Board</option>
                                    <option value="Access Panels">Access Panels</option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="g-recaptcha" data-sitekey="6LeOZ6waAAAAANgmnM0nrtWti9KlsKdxE5U-qFtm"
                                    style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7); transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" name="submitformcontact">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>