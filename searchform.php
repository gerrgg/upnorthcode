<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#searchModal">
	<i class="fa fa-search"></i>
</button>

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchform" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<div class="input-group">
						<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
						<input type="text" class="form-control" id="s" name="s"
						placeholder="<?php esc_attr_e( 'Search', 'upnorthcode' ); ?>"
						value="<?php the_search_query(); ?>" autocomplete="off" />
						<div class="input-group-append">
					    <button class="btn btn-dark" type="button" id="clearForm">
								<i class="fa fa-times"></i>
							</button>
					  </div>
					</div>
				</form>
				<div id="search_results" class="my-4">
					<h6>TODO: use AJAX to get results and put here.</h6>
				</div>
      </div>
    </div>
  </div>
</div>
