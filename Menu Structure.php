
<!------------- Use this default menu structure for creating menu...---->

<div id="header-menu" class="header-menu"> <!---Change Id and Class if required----->
	<ul id="main-menu" class="main-menu"> <!---Change Id and Class if required----->
		<li class="menu-item">
			<a href="#">Link 1</a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="#">Link 1.1</a>
					<ul class="sub-menu">
						<li class="menu-item">
							<a href="#">Link 1.1.1</a>
							<ul class="sub-menu">
								<li class="menu-item">
									<a href="#">Link 1.1.1.1</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="menu-item">
			<a href="#">Link 2</a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="#">Link 2.1</a>
					<ul class="sub-menu">
						<li class="menu-item">
							<a href="#">Link 2.1.1</a>
							<ul class="sub-menu">
								<li class="menu-item">
									<a href="#">Link 2.1.1.1</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="menu-item">
			<a href="#">Link 3</a>
			<ul class="sub-menu">
				<li class="menu-item">
					<a href="#">Link 3.1</a>
					<ul class="sub-menu">
						<li class="menu-item">
							<a href="#">Link 3.1.1</a>
							<ul class="sub-menu">
								<li class="menu-item">
									<a href="#">Link 3.1.1.1</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>				



<script>
	jQuery(document).ready(function() {
		// > Nav submenu show hide on mobile by = custom.js
		
		jQuery(".sub-menu").parent('li').addClass('has-child');
		jQuery("<div class='fa fa-angle-right submenu-toogle'></div>").insertAfter(".has-child > a");
		jQuery('.has-child a+.submenu-toogle').on('click',function(ev) {
			jQuery(this).next(jQuery('.sub-menu')).slideToggle('fast', function(){
				jQuery(this).parent().toggleClass('nav-active');
			});
			ev.stopPropagation();
		});
		
	}); 
</script>