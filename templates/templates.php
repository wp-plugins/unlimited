<script type="text/template" id="pb-un-form-tmpl">	
	<form class="pb-un-form pb-inline" id="<%= form_id %>">
		<div class="pb-inline">	
			<% if(theme) {%>
			<fieldset class="pb-un-field-row pb-clr pb-un-notice">
				<legend>Theme</legend>
				<span class="pb-un-label">Theme:</span>
				<div class="pb-un-input-wrapper">
					<input value="<%= theme %>" name="theme" disabled/>
				</div></br>	
				<p><b>Theme match found.</b></br>Please only change the <b>Selectors</b> if you've altered this theme.</p>
			</fieldset>
			<% } %>
			<fieldset class="pb-un-form-section">
				<legend>Type</legend>
				<div class="pb-un-types">
					<label><input type="radio" name="untype" value="scroll" class="pb-un-chose-type" <%- untype === 'scroll' ? 'checked' : '' %>/><h4>On scroll</h4></label>
						<div class="pb-un-chosen-type pb-hidden">
							<div class="pb-un-field-row pb-clr"><label>
								<span class="pb-un-label">Threshold:</span>
								<div class="pb-un-input-wrapper">
									<input value="<%= threshold %>" name="threshold"/>
									<span>Distance to bottom</span>
								</div>	
							</label></div>	
						</div>
					<label><input type="radio" name="untype" value="load" class="pb-un-chose-type" <%- untype === 'load' ? 'checked' : '' %>/><h4>Load more button</h4></label>
						<div class="pb-un-chosen-type pb-hidden">
							<div class="pb-un-field-row pb-clr"><label>
								<span class="pb-un-label">Button Text</span>
								<div class="pb-un-input-wrapper">
									<input value="<%= load_more_text %>" name="load_more_text"/>
								</div>	
							</label></div>
							<div class="pb-un-field-row pb-clr"><label>
								<span class="pb-un-label">Loading</span>
									<div class="pb-un-input-wrapper">
										<input value="<%= loading_text %>" name="loading_text"/>
									</div>	
							</label></div>
						</div>
					<label><input type="radio" name="untype" value="ajax" class="pb-un-chose-type" <%- untype === 'ajax' ? 'checked' : '' %>/><h4>Ajax Pagination</h4></label>
				</div>	
			</fieldset>
			
			<fieldset class="pb-un-form-section">
				<legend>Selectors</legend>
				<div class="pb-un-field-row pb-clr"><label>
					<span class="pb-un-label">Content:</span>
					<div class="pb-un-input-wrapper">
						<input value="<%= content %>" name="content"/>
						<span>Element containing posts</span>
					</div>
				</label></div>
				<div class="pb-un-field-row pb-clr"><label>
					<span class="pb-un-label">Post:</span>
					<div class="pb-un-input-wrapper">
						<input value="<%= post %>" name="post"/>
						<span>Single post</span>
					</div>
				</label></div>
				<div class="pb-un-field-row pb-clr"><label>
					<span class="pb-un-label">Navigation:</span>
					<div class="pb-un-input-wrapper">
						<input value="<%= nav %>" name="nav"/>
						<span>Element containing post-navigation</span>
					</div>
				</label></div>
				<div class="pb-un-field-row pb-clr"><label>
					<span class="pb-un-label">Next:</span>
					<div class="pb-un-input-wrapper">
						<input value="<%= next %>" name="next"/>
						<span>Post-navigation 'Next' button</span>
					</div>
				</label></div>
			</fieldset>
		</div>
		
		<div class="pb-inline">
			<fieldset class="pb-un-form-section">
				<legend>Messages</legend>
				<div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Loader Image</span>
						<div class="pb-un-input-wrapper">
							<input value="<%= loader_img_url %>" class="pb-hidden" name="loader_img_url"/>
							<input value="<%= loader_img_name %>"  name="loader_img_name" class="pb-hidden"/>
							<input value="<%= loader_img_name %>" class="pb-un-loader-name" disabled/>
							<img src="<%= loader_img_url %>" class="pb-un-loader-img"/>
							<input type="file" name="loader_img" class="pb-un-loader-file pb-hidden"/>
							<button class="pb-un-change-loader button">Change</button>
						</div>	
					</label></div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Posts finished</span>
							<div class="pb-un-input-wrapper">
								<input value="<%= no_more_text %>" name="no_more_text"/>
							</div>	
					</label></div>
				</div>
			</fieldset>
			
			<fieldset class="pb-un-form-section pb-hidden">
				<legend>History</legend>
				<div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Enable History</span>
							<div class="pb-un-input-wrapper">
								<input type="checkbox" name="history" <%- history === 'on' ? 'checked' : '' %>/>
							</div>	
					</label></div>
				</div>
			</fieldset>
			
			<fieldset class="pb-un-form-section pb-hidden">
				<legend>Scroll</legend>
				<div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">To</span>
							<div class="pb-un-input-wrapper">
								<input value="<%= scrollto %>" name="scrollto"/>
								<span>'html, body' scrolls to top</span>
							</div>	
					</label></div>
				</div>
			</fieldset>
			
			<fieldset class="pb-un-form-section">
				<legend>Meta</legend>
				<div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Name</span>
							<div class="pb-un-input-wrapper">
								<input value="<%= name %>" name="name"/>
								<span>Form Identifier</span>
							</div>	
					</label></div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Enabled</span>
							<div class="pb-un-input-wrapper">
								<input type="checkbox" name="status" <%- status === 'on' ? 'checked' : '' %>/>
								<input type="hidden" name="key" value="<%= key %>"/>
							</div>	
					</label></div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Scroll to Top</span>
							<div class="pb-un-input-wrapper">
								<input type="checkbox" name="scroll_to_top" <%- scroll_to_top === 'on' ? 'checked' : '' %>/>
							</div>	
					</label></div>
				</div>
			</fieldset>
			
			<fieldset class="pb-un-form-section auto-load-section <%- untype === 'scroll' ? '' : 'pb-hidden' %>">
				<legend>Auto-Load</legend>
				<div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Can opt-out</span>
							<div class="pb-un-input-wrapper">
								<input class="pb-un-auto-load" type="checkbox" <%- can_opt_out === 'on' ? 'checked' : '' %> name="can_opt_out"/>
							</div>	
					</label></div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Disable auto-load text:</span>
							<div class="pb-un-input-wrapper">
								<input name="stop_text" value="<%= stop_text %>" />
							</div>	
					</label></div>
					<div class="pb-un-field-row pb-clr"><label>
						<span class="pb-un-label">Enable auto-load text:</span>
							<div class="pb-un-input-wrapper">
								<input name="start_text" value="<%= start_text %>" />
							</div>	
					</label></div>
				</div>
			</fieldset>
			
		</div>
		<div class="">
			<button class="pb-un-save button button-primary">Save</button>
			<% if(key){ %> <button class="pb-un-delete button button-primary">Delete</button> <% } %>
		</div>
	</form>		
		</script>	