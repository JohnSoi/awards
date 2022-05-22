<header id="header" class="bg-light py-1">
	<div class="container-fluid">
		<ul class="nav justify-content-center">
			<div class="dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript://">Заявки</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="{{ Route('admin.gildia.index') }}">Член гильдии</a>
					<a class="dropdown-item" href="{{ Route('admin.organization.index') }}">Организация</a>
				</div>
			</div>
		</ul>
		<div class="row mt-1 py-2 border-top align-items-center">
			<div class="col-lg-3">
				@if(isset($items))
				<div class="items-total">
					Показано: <span view-count>{{ $items->count() }}</span> из <span total-count>{{ $items->total() }}</span>
					@if(!View::hasSection('add_form_disable'))
					<a class="ml-3" href="#formModal" data-toggle="modal">Добавить</a>
					@endif
				</div>
				@endif
			</div>
			<div class="col-lg-9 d-flex justify-content-end align-items-center">
				@yield('actions')
			</div>
		</div>
	</div>
</header>