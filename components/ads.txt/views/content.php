<?php
echo wp_kses_post(
	apply_filters(
		'managads_ads.txt_content',
		''
	)
);
