
<!--##################    FOOTER    ##################-->
<!-- Collapsible Footer -->
<footer class="footer">
    <div class="footer-container row row-cols-1 row-cols-md-2 justify-content-center mx-auto pt-3 pl-5">
        <div class="col">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Contact
            </a>
            <div id="collapseOne" class="panel-collapse collapse in pt-2" role="tabpanel">
                <ul class="contact">
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i><a
                            href="mailto:Dclemmer2@mail.greenriver.edu?subject=EmailSubjectline">Email Me</a>
                    </li>
                    <!--<li>
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:206-480-8610">206-480-8610</a>
                    </li>-->
                    <li>
                        <i class="fa fa-linkedin" aria-hidden="true"></i><a
                            href="https://www.linkedin.com/in/dana-clemmer/" target="_blank">www.linkedin.com/in/dana-clemmer</a>
                    </li>
                    <li>
                        <i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/dclemmer2"
                                                                          target="_blank">github.com/dclemmer2</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col">
            <a class="taber text-uppercase" data-toggle="collapse" data-parent="#accordion"
               href="#collapsetwo" aria-expanded="false" aria-controls="collapseOne">
                Connect
            </a>
            <div id="collapsetwo" class="panel-collapse collapse in pt-2" role="tabpanel">
                <p class="connect"><i class="fa fa-address-book" aria-hidden="true"></i><a id="guestbook-link"
                                                                                           href="https://dclemmer.greenriverdev.com/305/portfolio/guestbook.php"
                                                                                           target="_blank">Sign my
                        Guestbook!</a></p>
            </div>
        </div>
    </div>
    <br>
    <!--  Bottom -->
    <div>
        <!--Left Column-->
        <div class="col text-left pt-2">
            <p><a href="login.php" target="_blank" id="admin-link"><span class="fa fa-lock" id="adminLock"></span>Admin Login</a></p>
        </div>
        <!--Right Column-->
        <div class="text-center copyright-text">
            <p>© Copyright 2020: Dana Clemmer</p>
        </div>
    </div>
</footer>


<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="scripts/resume.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $('#guestbook-table').DataTable({
        'scrollX': true
    });
</script>
</body>
</html>
