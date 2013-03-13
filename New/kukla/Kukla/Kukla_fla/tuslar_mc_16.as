package Kukla_fla
{
    import flash.display.*;
    import flash.events.*;
    import flash.net.*;

    dynamic public class tuslar_mc_16 extends MovieClip
    {
        public var tr_btn:SimpleButton;
        public var facebook_btn:SimpleButton;
        public var en_btn:SimpleButton;
        public var twitter_btn:SimpleButton;

        public function tuslar_mc_16()
        {
            addFrameScript(0, this.frame1);
            return;
        }// end function

        public function tr(event:MouseEvent) : void
        {
            navigateToURL(new URLRequest("http://www.izmirkuklagunleri.com/tr"), "_self");
            return;
        }// end function

        public function en(event:MouseEvent) : void
        {
            navigateToURL(new URLRequest("http://www.izmirkuklagunleri.com/en"), "_self");
            return;
        }// end function

        public function faceb(event:MouseEvent) : void
        {
            navigateToURL(new URLRequest("http://www.facebook.com/izmiruluslararasikuklagunleri"), "_blank");
            return;
        }// end function

        public function twit(event:MouseEvent) : void
        {
            navigateToURL(new URLRequest("https://twitter.com/izmirpuppetdays"), "_blank");
            return;
        }// end function

        function frame1()
        {
            this.tr_btn.addEventListener(MouseEvent.CLICK, this.tr);
            this.en_btn.addEventListener(MouseEvent.CLICK, this.en);
            this.facebook_btn.addEventListener(MouseEvent.CLICK, this.faceb);
            this.twitter_btn.addEventListener(MouseEvent.CLICK, this.twit);
            return;
        }// end function

    }
}
