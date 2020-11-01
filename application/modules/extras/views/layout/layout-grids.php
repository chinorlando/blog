
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
                                
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Layout</a></li>
				<li class="active"><a href="layout-grids.html">Grid Systems</a></li>

            </ol>
            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Grid System</h2>
				</div>
				<div class="panel-body">
					<p>Avenxo includes Bootstrap's responsive, mobile-first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.</p>
					<div class="panel mb-n">
						<div class="panel-body no-padding">
							<div class="table-responsive mb-n">
								<table class="table table-bordered table-striped mb-n">
									<thead>
										<tr>
											<th></th>
											<th>
												Extra small devices
												<small>Phones (&lt;768px)</small>
											</th>
											<th>
												Small devices
												<small>Tablets (≥768px)</small>
											</th>
											<th>
												Medium devices
												<small>Desktops (≥992px)</small>
											</th>
											<th>
												Large devices
												<small>Desktops (≥1200px)</small>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>Grid behavior</th>
											<td>Horizontal at all times</td>
											<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
										</tr>
										<tr>
											<th>Max container width</th>
											<td>None (auto)</td>
											<td>100%</td>
											<td>100%</td>
											<td>100%</td>
										</tr>
										<tr>
											<th>Class prefix</th>
											<td><code>.col-xs-</code></td>
											<td><code>.col-sm-</code></td>
											<td><code>.col-md-</code></td>
											<td><code>.col-lg-</code></td>
										</tr>
										<tr>
											<th># of columns</th>
											<td colspan="4">12</td>
										</tr>
										<tr>
											<th>Max column width</th>
											<td class="text-muted">Auto</td>
											<td>60px</td>
											<td>78px</td>
											<td>95px</td>
										</tr>
										<tr>
											<th>Gutter width</th>
											<td colspan="4">20px (10px on each side of a column)</td>
										</tr>
										<tr>
											<th>Nestable</th>
											<td colspan="4">Yes</td>
										</tr>
										<tr>
											<th>Offsets</th>
											<td colspan="1" class="text-muted">N/A</td>
											<td colspan="3">Yes</td>
										</tr>
										<tr>
											<th>Column ordering</th>
											<td class="text-muted">N/A</td>
											<td colspan="3">Yes</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Stacked-to-Horizontal</h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class='col-lg-12'>
							<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices.</p>
						</div>
					</div>
					<div class="show-grid">
						<div class="row">
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
						</div>
						<div class="row">
							<div class="col-md-8">.col-md-8</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row">
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row">
							<div class="col-md-6">.col-md-6</div>
							<div class="col-md-6">.col-md-6</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Combining Mobile with Desktop</h2>
				</div>
				<div class="panel-body">
					<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
					<div class="show-grid">
						<!-- Stack the columns on mobile by making one full-width and the other half-width -->
						<div class="row">
							<div class="col-xs-12 col-md-8">.col-xs-12 col-md-8</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						</div>

						<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
						<div class="row">
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						</div>

						<!-- Columns are always 50% wide, on mobile and desktop -->
						<div class="row">
							<div class="col-xs-6">.col-xs-6</div>
							<div class="col-xs-6">.col-xs-6</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Mobile, tablet, and desktop</h2>
				</div>
				<div class="panel-body">
					<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
					<div class="show-grid">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
							<div class="col-xs-6 col-sm-6 col-md-4">.col-xs-6 .col-sm-6 .col-md-4</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
							<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
							<!-- Optional: clear the XS cols if their content doesn't match in height -->
							<div class="clearfix visible-xs"></div>
							<div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Fluid Offsetting</h2>
				</div>
				<div class="panel-body">
					<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by * columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
					<div class="show-grid">
						<div class="row">
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
							<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Nesting Columns</h2>
				</div>
				<div class="panel-body">
					<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
					<div class="show-grid">
						<div class="row">
							<div class="col-md-12">
								Level 1: 12 columns
								<div class="row">
									<div class="col-md-6">Level 2: 6 columns</div>
									<div class="col-md-6">Level 2: 6 columns</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Column Ordering</h2>
				</div>
				<div class="panel-body">
					<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
					<div class="show-grid">
						<div class="row show-grid">
							<div class="col-md-9 col-md-push-3">9</div>
							<div class="col-md-3 col-md-pull-9">3</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>Responsive Same Height Columns</h2>
				</div>
				<div class="panel-body">
					<p>Avenxo contains an extension of Bootstrap's responsive mobile first layout which adds same height column support with the ability to chose vertical alignment just with a few additional classes.</p>

					<p>You have to add the classes <code>.container-xs-height</code> and <code>.row-xs-height</code> to the container and the row, and also add <code>.col-xs-height</code> to the columns.</p>
	<pre class="prettyprint linenums">
	&lt;div class=&quot;container container-xs-height&quot;&gt;
	    &lt;div class=&quot;row row-xs-height&quot;&gt;
	        &lt;div class=&quot;col-xs-6 col-xs-height&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-3 col-xs-height col-top&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-2 col-xs-height col-middle&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-1 col-xs-height col-bottom&quot;&gt;&lt;/div&gt;
	    &lt;/div&gt;
	&lt;/div&gt;</pre>

					<p>If you want to restrict the effect to a certain media query, just use <code>.col-sm-height</code> or <code>.col-md-height</code> or <code>.col-lg-height</code>, also replacing xs in the container and in the row classes. You can also use different column sizes on each media query.</p>

	<pre class="prettyprint linenums">
	&lt;div class=&quot;container container-sm-height&quot;&gt;
	    &lt;div class=&quot;row row-sm-height&quot;&gt;
	        &lt;div class=&quot;col-xs-12 col-sm-6 col-sm-height&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-6 col-sm-3 col-sm-height col-top&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-6 col-sm-2 col-sm-height col-middle&quot;&gt;&lt;/div&gt;
	        &lt;div class=&quot;col-xs-6 col-sm-1 col-sm-height col-bottom&quot;&gt;&lt;/div&gt;
	    &lt;/div&gt;
	&lt;/div&gt;</pre>

					<p>You choose the aligment of each column by using the classes <code>.col-top</code> or <code>.col-middle</code> or <code>.col-bottom</code>.</p>


					<h4>Only on 1200px+</h4>

					<div class="container container-lg-height show-grid">
					    
					    	<div class="row row-lg-height">
					    	    <div class="col-lg-3 col-lg-height">
					    	    	<div class="content">
					    	    	.col-lg-3.col-lg-height
					    	    	<br><br><br><br><br>
					    	    	</div>
					    	    </div>

					    	    <div class="col-lg-3 col-lg-height col-top">
					    	    	<div class="content">.col-lg-3 col-lg-height.col-top</div>
					    	    </div>

					    	    <div class="col-lg-2 col-lg-height col-middle">
					    	    	<div class="content">.col-lg-2 col-lg-height.col-middle</div>
					    	    </div>

					    	    <div class="col-lg-4 col-lg-height col-bottom">
					    	    	<div class="content">.col-lg-4 col-lg-height.col-bottom</div>
					    	    </div>
					    	</div>
					    
					</div>
					  
					<h4>Only on 992px+</h4>

					<div class="container container-md-height show-grid">
				    	<div class="row row-md-height">
				    	    <div class="col-md-3 col-md-height">
				    	    	<div class="content">
				    	    	.col-md-3.col-md-height
				    	    	<br><br><br><br><br>
				    	    	</div>
				    	    </div>

				    	    <div class="col-md-3 col-md-height col-top">
				    	    	<div class="content">.col-md-3 col-md-height.col-top</div>
				    	    </div>

				    	    <div class="col-md-2 col-md-height col-middle">
				    	    	<div class="content">.col-md-2 col-md-height.col-middle</div>
				    	    </div>

				    	    <div class="col-md-4 col-md-height col-bottom">
				    	    	<div class="content">.col-md-4 col-md-height.col-bottom</div>
				    	    </div>
				    	</div>
					</div>
					  
					<h4>Only on 768px+</h4>

					<div class="container container-sm-height show-grid">
				    	<div class="row row-sm-height">
				    	    <div class="col-sm-3 col-sm-height">
				    	    	<div class="content">
				    	    	.col-sm-3.col-sm-height
				    	    	<br><br><br><br><br>
				    	    	</div>
				    	    </div>

				    	    <div class="col-sm-3 col-sm-height col-top">
				    	    	<div class="content">.col-sm-3 col-sm-height.col-top</div>
				    	    </div>

				    	    <div class="col-sm-2 col-sm-height col-middle">
				    	    	<div class="content">.col-sm-2 col-sm-height.col-middle</div>
				    	    </div>

				    	    <div class="col-sm-4 col-sm-height col-bottom">
				    	    	<div class="content">.col-sm-4 col-sm-height.col-bottom</div>
				    	    </div>
				    	</div>
					</div>
					  
					<h4>All resolutions</h4>

					<div class="container container-xs-height show-grid">
				    	<div class="row row-xs-height">
				    	    <div class="col-xs-3 col-xs-height">
				    	    	<div class="content">
				    	    	.col-xs-3.col-xs-height
				    	    	<br><br><br><br><br>
				    	    	</div>
				    	    </div>

				    	    <div class="col-xs-3 col-xs-height col-top">
				    	    	<div class="content">.col-xs-3 col-xs-height.col-top</div>
				    	    </div>

				    	    <div class="col-xs-2 col-xs-height col-middle">
				    	    	<div class="content">.col-xs-2 col-xs-height.col-middle</div>
				    	    </div>

				    	    <div class="col-xs-4 col-xs-height col-bottom">
				    	    	<div class="content">.col-xs-4 col-xs-height.col-bottom</div>
				    	    </div>
				    	</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-transparent" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>No Gutter</h2>
				</div>
				<div class="panel-body">
					<p>By adding <code>no-gutter</code> to <code>row</code> classes, you can place the columns with no gutter. Handy for fine tuning your custom apps!</p>

					<div class="show-grid">
						<div class="row no-gutter">
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
						</div>
						<div class="row no-gutter">
							<div class="col-md-8">.col-md-8</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row no-gutter">
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row no-gutter">
							<div class="col-md-6">.col-md-6</div>
							<div class="col-md-6">.col-md-6</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
         