
<div id="footer">

</div>
<!--здесь функция для мини слайдера основного фона -->
		<script>
		 (function(){
			 var cls = ['pic-1','pic-2','pic-3'],
				body = document.getElementsByTagName('body')[0],
				i = 1,
				clsLen = cls.length - 1;
			 function bgSlider() {
				setInterval(function(){
					body.className = cls[i];
					i = i == clsLen ? 0 : i + 1;
				},3200);
			 }
				window.onload = bgSlider;
			})();
			</script>	
</body>
</html>