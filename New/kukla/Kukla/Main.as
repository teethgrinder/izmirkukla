package 
{
    import flash.display.*;
    import flash.events.*;
    import flash.media.*;
    import flash.net.*;

    public class Main extends MovieClip
    {
        public var duvar_mc:MovieClip;
        public var logo_mc:MovieClip;
        public var kukla_mc:MovieClip;
        public var tuslar_mc:MovieClip;
        public var karsiyaka_mc:MovieClip;
        public var gunes_mc:MovieClip;
        public var bulutlar_mc:MovieClip;
        public var deniz_mc:MovieClip;
        public var vapur_mc:MovieClip;
        var sW:int = 0;
        var sH:int = 0;
        var midX:int = 0;
        var midY:int = 0;
        var s:Sound;
        var s2:Sound;
        var s3:Sound;
        var c:SoundChannel;
        var c2:SoundChannel;
        var c3:SoundChannel;
        var t:Object;
        var t2:Object;
        var t3:Object;

        public function Main()
        {
            this.s = new Sound();
            this.s2 = new Sound();
            this.s3 = new Sound();
            this.c = new SoundChannel();
            this.c2 = new SoundChannel();
            this.c3 = new SoundChannel();
            this.t = new SoundTransform();
            this.t2 = new SoundTransform();
            this.t3 = new SoundTransform();
            stage.scaleMode = StageScaleMode.NO_SCALE;
            stage.align = StageAlign.TOP_LEFT;
            stage.addEventListener(Event.RESIZE, this.resizeListener);
            stage.addEventListener(MouseEvent.MOUSE_MOVE, this.mouseMoveHandler);
            this.resizeListener(null);
            var _loc_1:* = new URLRequest("crowd.mp3");
            var _loc_2:* = new URLRequest("sea.mp3");
            var _loc_3:* = new URLRequest("traffic.mp3");
            this.t.volume = 0.15;
            this.t2.volume = 0.07;
            this.t3.volume = 0.2;
            this.s.load(_loc_1);
            this.c = this.s.play(0, 999);
            this.c.soundTransform = this.t;
            this.s2.load(_loc_2);
            this.c2 = this.s2.play(0, 999);
            this.c2.soundTransform = this.t2;
            this.s3.load(_loc_3);
            this.c3 = this.s3.play(0, 999);
            this.c3.soundTransform = this.t3;
            return;
        }// end function

        public function resizeListener(event:Event) : void
        {
            this.sW = stage.stageWidth;
            this.sH = stage.stageHeight;
            var _loc_2:* = this.sW / 2;
            this.kukla_mc.x = this.sW / 2;
            var _loc_2:* = _loc_2;
            this.duvar_mc.x = _loc_2;
            var _loc_2:* = _loc_2;
            this.vapur_mc.x = _loc_2;
            var _loc_2:* = _loc_2;
            this.karsiyaka_mc.x = _loc_2;
            var _loc_2:* = _loc_2;
            this.deniz_mc.x = _loc_2;
            var _loc_2:* = _loc_2;
            this.gunes_mc.x = _loc_2;
            var _loc_2:* = _loc_2;
            this.bulutlar_mc.x = _loc_2;
            this.logo_mc.x = _loc_2;
            var _loc_2:* = this.sH / 2;
            this.kukla_mc.y = this.sH / 2;
            var _loc_2:* = _loc_2;
            this.duvar_mc.y = _loc_2;
            var _loc_2:* = _loc_2;
            this.vapur_mc.y = _loc_2;
            var _loc_2:* = _loc_2;
            this.karsiyaka_mc.y = _loc_2;
            var _loc_2:* = _loc_2;
            this.deniz_mc.y = _loc_2;
            var _loc_2:* = _loc_2;
            this.gunes_mc.y = _loc_2;
            this.bulutlar_mc.y = _loc_2;
            this.logo_mc.y = this.sH / 6;
            this.tuslar_mc.y = this.sH / 2;
            this.tuslar_mc.x = this.sW / 2;
            return;
        }// end function

        public function mouseMoveHandler(event:MouseEvent) : void
        {
            this.midX = event.target.stage.mouseX - this.sW / 2;
            this.midY = event.target.stage.mouseY - this.sH / 2;
            this.bulutlar_mc.bulutlaric_mc.x = 0 + this.midX / 120;
            this.gunes_mc.gunesic_mc.x = 0 + this.midX / 150;
            this.deniz_mc.denizic_mc.x = 0 + this.midX / 90;
            this.karsiyaka_mc.karsiyakaic_mc.x = 550 + this.midX / 110;
            this.vapur_mc.vapuric_mc.x = -425 + this.midX / 60;
            this.duvar_mc.duvaric_mc.x = 0 + this.midX / 40;
            this.kukla_mc.kuklaic_mc.x = -50 + this.midX / 20;
            return;
        }// end function

    }
}
