<div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_todo_aside">
	
	<div class="card card-custom card-stretch">
		
		<div class="card-body px-5">
			<!--begin:Nav-->
			<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
				<?php 
					$actual_link = url()->current();

					$host = explode('/', $actual_link);

					if ($host[8] == 'dashboard' AND $host[8] == 'sections') 
					{
						$active = 'active';
					}
					else
					{
						$active = '';
					}

				?>
				<!--begin:Item-->
				<div class="navi-item my-2">
					<a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/landing-pages/dashboard?slug={{$slug}}" class="navi-link {{$active}}">
						<i class="fas fa-sliders-h" aria-hidden="true" style="margin-right: 10px;"></i>
                        </span> <span class="menu-text">Images Content</span>
					</a>
				</div>
				<div class="navi-item my-2">
					<a href="{{ env('APP_HOME_URL') }}{{ env('APP_ADMIN_SECTION') }}/landing-pages/sections?slug={{$slug}}" class="navi-link {{$active}}">
						<span class="svg-icon menu-icon">
                            <i class="fas fa-text-height" aria-hidden="true" style="margin-right: 10px;"></i>
                        </span> 
                        <span class="menu-text">Sections Text</span>
					</a>
				</div>
			</div>
		</div>
		<!--end:Nav-->
		
	</div>
</div>