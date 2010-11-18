<div id="cakephp-global-navigation">
	<ul>
		<li class="main"><a href="http://cakephp.org">CakePHP</a></li>
		<li><a href="#" class="empty"><?php __d('csfnavbar', 'Downloads'); ?></a>
			<ul>
				<li><a href="http://cakephp.org"><?php __d('csfnavbar', 'Latest Release'); ?></a></li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/1.2">CakePHP 1.2</a>
					<ul>
						<li><a href="http://github.com/cakephp/cakephp/archives/1.2"><?php __d('csfnavbar', 'Download'); ?></a>&nbsp;|</li>
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones"><?php __d('csfnavbar', 'Tickets'); ?></a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/1.3">CakePHP 1.3</a>
					<ul>
						<li><a href="http://github.com/cakephp/cakephp/archives/1.3"><?php __d('csfnavbar', 'Download'); ?></a>&nbsp;|</li>
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones"><?php __d('csfnavbar', 'Tickets'); ?></a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://github.com/cakephp/cakephp/tree/2.0">CakePHP 2.0</a>
					<ul>
						<!-- <li><a href="#"><?php __d('csfnavbar', 'Download'); ?></a>|</li> -->
						<li><a href="http://cakephp.lighthouseapp.com/projects/42648-cakephp/milestones"><?php __d('csfnavbar', 'Tickets'); ?></a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#" class="empty"><?php __d('csfnavbar', 'Documentation'); ?></a>
			<ul>
				<li class="cake-version"><a href="http://api.cakephp.org"><?php __d('csfnavbar', 'API'); ?></a>
					<ul>
						<li><a href="http://api11.cakephp.org">1.1</a>&nbsp;|</li>
						<li><a href="http://api12.cakephp.org">1.2</a>&nbsp;|</li>
						<li><a href="http://api13.cakephp.org">1.3</a></li>
					</ul>
				</li>
				<li class="cake-version"><a href="http://book.cakephp.org"><?php __d('csfnavbar', 'Book'); ?></a>
					<ul>
						<li><a href="http://book.cakephp.org/view/304/x1-1-Collection">1.1</a>&nbsp;|</li>
						<li><a href="http://book.cakephp.org/view/2/x1-2-Collection">1.2</a>&nbsp;|</li>
						<li><a href="http://book.cakephp.org/view/875/x1-3-Collection">1.3</a></li>
					</ul>
				</li>
				<li><a href="http://cakephp.lighthouseapp.com"><?php __d('csfnavbar', 'Tickets'); ?></a></li>
				<li><a href="http://translation.cakephp.org"><?php __d('csfnavbar', 'Translations'); ?></a></li>
			</ul>
		</li>
		<li><a href="#" class="empty"><?php __d('csfnavbar', 'Community'); ?></a>
			<ul>
				<li><a href="http://bakery.cakephp.org"><?php __d('csfnavbar', 'Bakery'); ?></a></li>
				<li><a href="http://github.com/cakephp/cakephp/contributors"><?php __d('csfnavbar', 'Contributors'); ?></a></li>
				<li><a href="http://groups.google.com/group/cake-php"><?php __d('csfnavbar', 'Google Groups'); ?></a></li>
				<li><a href="http://cakephp.org/logos"><?php __d('csfnavbar', 'Logo'); ?></a></li>
				<li><a href="http://cakephp.org/planet"><?php __d('csfnavbar', 'Planet'); ?></a></li>
				<li><a href="http://ask.cakephp.org"><?php __d('csfnavbar', 'Q &amp; A'); ?></a></li>
				<li><a href="http://tv.cakephp.org"><?php __d('csfnavbar', 'TV (Screencasts)'); ?></a></li>
			</ul>
		</li>
		<li><a href="http://cakephp.org/services"><?php __d('csfnavbar', 'Services'); ?></a>
			<ul>
				<li><a href="http://cakephp.org/services/certification"><?php __d('csfnavbar', 'Certification'); ?></a></li>
				<li><a href="http://cakephp.org/services/consultation"><?php __d('csfnavbar', 'Consultation'); ?></a></li>
				<li><a href="http://cakephp.org/services/support"><?php __d('csfnavbar', 'Support'); ?></a></li>
				<li><a href="http://cakephp.org/services/training"><?php __d('csfnavbar', 'Training'); ?></a></li>
			</ul>
		</li>
	</ul>
</div>
<script>
$(function() {
	$("#cakephp-global-navigation ul li a.empty")
		.click(function(e) { e.preventDefault(); })
		.parent().bind('mouseleave mouseenter click', function(event) {
			var submenu = $(this).children('ul');
			if (event.type == 'mouseleave') {
				submenu.hide();
			} else if (event.type == 'mouseenter') {
				submenu.show();
			} else {
				submenu.toggle();
			}
		});
})
</script>