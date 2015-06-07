
</div>
<footer>
    <div class="row">
      <br/><br/>
      <div class="small-4 columns">
        <form id="paypalW" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="AN5VB6ZPWMQD8">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>
      <div class="small-4 columns">
        <ul>
            <li>
                <a class="logo" href="#">LastStandStudio <i>Copyright &copy; 2015</i></a>
            </li>
        </ul>
      </div>
      <div class="small-4 columns">
        <span id="cdSiteSeal2" style="text-align:center;"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal2&amp;cdSealType=Seal2&amp;sealId=55e4ye7y7mb734ba50f13d1561dca61q5ay7mb7355e4ye76e402209b5f95a0b5"></script></span>
      </div>
    </div>
</footer>

<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();

    $(window).scroll(function () {
        var window_scroll = $(this).scrollTop();
        $("span#fade").css({
            'opacity': 1 - (window_scroll / 300)
        });

    });

    !function(d,s,id) {
        var js, fjs=d.getElementsByTagName(s)[0], p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)) {
            js=d.createElement(s);
            js.id=id;
            js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document,"script","twitter-wjs");
</script>
</body>

</html>
