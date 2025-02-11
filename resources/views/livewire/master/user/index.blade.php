@section('title')
Daftar Pengguna
@stop
@section('menu')
Master Data > <b>Daftar Pengguna</b>
@stop
<!--begin::Col-->

<div class="row gx-6 gx-xl-9">
    <div class="col-lg-{{$isOpen ? '8' : '12' }} col-xxl-{{$isOpen ? '8' : '12' }}">
        <!--begin::Tables widget 14-->
        <div class="card card-flush h-md-100">
            <!--begin::Card header-->
            <div class="card-header align-items-center gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                            data-kt-ecommerce-product-filter="search" wire:model.live="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <button wire:click="toggle" class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus"></i>
                        Tambah</button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0 table-responsive">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="text-uppercase">
                                <th class="pl-0" style="min-width: 100px">
                                </th>
                                <th style="min-width: 120px text-center">Username
                                    @if ($sortColoumName === 'username')
                                    <span wire:click="sortBy('username')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'username' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('username')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th style="min-width: 120px text-center">Nama Lengkap
                                    @if ($sortColoumName === 'nama')
                                    <span wire:click="sortBy('nama')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'nama' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('nama')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th style="min-width: 120px text-center">Email Aktif
                                    @if ($sortColoumName === 'email')
                                    <span wire:click="sortBy('email')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'email' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('email')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th style="min-width: 120px text-center">Hak Akses
                                    @if ($sortColoumName === 'role_id')
                                    <span wire:click="sortBy('role_id')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'role_id' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('role_id')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th style="min-width: 120px text-center">Instansi
                                    @if ($sortColoumName === 'instansi_id')
                                    <span wire:click="sortBy('instansi_id')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'instansi_id' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('instansi_id')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th style="min-width: 120px text-center">Login Terakhir
                                    @if ($sortColoumName === 'last_login_at')
                                    <span wire:click="sortBy('last_login_at')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i
                                            class="{{ $sortColoumName === 'last_login_at' && $sortDirection === 'desc' ? ' fas fa-sort-up ' : 'fas fa-sort-down' }}"></i>
                                    </span>
                                    @else
                                    <span wire:click="sortBy('last_login_at')" class="float-end text-sm"
                                        style="cursor: pointer;">
                                        <i class="fas fa-sort"></i>
                                    </span>
                                    @endif
                                </th>
                                <th class="pr-0 text-right" style="min-width: 160px">Aktif</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @forelse ($model as $index => $item)
                            <tr>
                                <td>
                                    <a href="#"
                                        class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Aksi <i class="ki-outline ki-down fs-5 ms-1"></i>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true"
                                        style="z-index: 107; position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-60px, 299px);"
                                        data-popper-placement="bottom-end">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('autologin', ['id' => Crypt::encrypt($item->id)]) }}" class="menu-link px-3">
                                                Auto Login
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" wire:click="edit({{ $item->id }})" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" wire:click="deleteRequest({{ $item->id }})"
                                                class="menu-link px-3">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->username}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->nama}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->email}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->roles->role}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->instansi->name}}</span>
                                </td>
                                <td>
                                    <span
                                        class="text-center text-gray-80 font-weight-bolder text-hover-success font-size-lg">{{ $item->last_login_at}}</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckStatus{{ $item->id }}"
                                            wire:click="status({{ $item->id }})"
                                            {{ $item->is_active == 0 ? '' : 'checked' }}>
                                        <label class="form-check-label"
                                            for="flexSwitchCheckStatus{{ $item->id }}">{{ $item->is_active == 0 ? 'Tidak Aktif' : 'Aktif' }}</label>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr class="odd">
                                <td valign="top" colspan="8" class="dataTables_empty">Nama Tidak Ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>

                <div class="row">
                    <div
                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="dataTables_length" id="kt_ecommerce_products_table_length">
                            <label>
                                <select name="kt_ecommerce_products_table_length"
                                    aria-controls="kt_ecommerce_products_table"
                                    class="form-select form-select-sm form-select-solid" wire:model.live="perpage">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers"
                            id="kt_ecommerce_products_table_paginate">
                            {{ $model->links() }}
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Tables widget 14-->
    </div>
    @if ($isOpen)
    <div class="col-lg-4 col-xxl-4">
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <form action="">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>{!!$actionTitle!!} @yield('title')</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input -->
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Username</label>
                            <input {{ $mode == 'update' ? 'disabled' : '' }} wire:model='username' type="text"
                                class="form-control  @error('username') is-invalid @enderror"
                                placeholder="Ex: admin" />
                            <input type="hidden" class="form-control  @error('user_id') is-invalid @enderror"
                                wire:model="user_id" />
                            @error('username')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Nama Lengkap</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                placeholder="Ex: Super Admin" wire:model="nama" />
                            @error('nama')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">NIP/NIK</label>
                            <input type="text" class="form-control  @error('nip') is-invalid @enderror"
                                placeholder="Ex: 1234567890" wire:model="nip" />
                            @error('nip')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <label class="required form-label">Jenis Kelamin</label>
                            <select x-init="$($el).select2({
                                                placeholder: '-- Pilih Jenis Kelamin --',
                                            });
                                            $($el).on('change', function() {
                                                $wire.set('jenis_kelamin', $($el).val())
                                            })" wire:model.live="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin"
                                class="form-control form-control-lg ">
                                <option value=""> -- Pilih Jenis Kelamin--</option>
                                <option value="1"> Laki-Laki</option>
                                <option value="2"> Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <!--end::Input -->
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Email</label>
                            <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                placeholder="Ex: admin@gmail.com" {{ $mode == 'update' ? 'disabled' : '' }}  wire:model="email" />
                            @error('email')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container">
                            <label class="required form-label">No Telp</label>
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                                placeholder="Ex: 081234567890" wire:model="phone" />
                            @error('phone')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <label class="required form-label">Hak Akses</label>
                            <select x-init="$($el).select2({
                                                placeholder: '-- Pilih Hak Akses --',
                                            });
                                            $($el).on('change', function() {
                                                $wire.set('role_id', $($el).val())
                                            })" wire:model.live="role_id" name="role_id" id="role_id"
                                class="form-control form-control-lg ">
                                <option value=""> -- Pilih Hak Akses--</option>
                                @foreach ($role_list as $item)
                                <option value="{{ $item->id }}">{{ $item->role }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <!--end::Input -->

                        <div class="mb-3 fv-row fv-plugins-icon-container" wire:ignore>
                            <label class="required form-label">Instansi</label>
                            <select x-init="$($el).select2({
                                                placeholder: '-- Pilih Instansi--',
                                            });
                                            $($el).on('change', function() {
                                                $wire.set('instansi_id', $($el).val())
                                            })" wire:model.live="instansi_id" name="instansi_id" id="instansi_id"
                                class="form-control form-control-lg ">
                                <option value=""> -- Pilih Dinas--</option>
                                @foreach ($listSkpd as $list)
                                <option value="{{ $list->id }}">{{ $list->name }}</option>
                                @endforeach
                            </select>
                            @error('instansi_id')
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }} </div>
                            @enderror
                        </div>
                        <!--end::Input -->
                    </div>
                    <!--end::Card header-->
                    <div class="card-footer pt-0">
                        <button type="button" wire:offline.attr="disabled" wire:loading.class.remove="btn-primary"
                            wire:loading.attr="disabled" @if ($mode=='create' ) wire:click.prevent="store" @else
                            wire:click.prevent="update" @endif class="btn btn-success">
                            <i class="fa fa-save"></i>
                            {{ $mode == 'create' ? 'Simpan' : 'Edit' }}
                            <span wire:loading @if ($mode=='create' ) wire:target="store" @else wire:target="update"
                                @endif class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </button>
                        <button type="button" wire:click.prevent="cancel" wire:click="toggle"
                            class="btn btn-secondary">Batal</button>

                    </div>
                </div>
                <!--end::General options-->

            </form>
        </div>
    </div>
    @endif
</div>

<!--end::Col-->

@push('meta')
<meta name="turbolinks-visit-control" content="reload">
<meta name="turbolinks-cache-control" content="no-cache">
@endpush
@push('js')
<script>
    window.addEventListener('swal:deleteRequest', event => {
        Swal.fire({
            title: event.detail[0].title,
            text: event.detail[0].text,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                @this.call('deleteSelectedRequest', event.detail[0].id);
                Swal.fire({
                    title: 'Data Berhasil tersimpan',
                    icon: 'success'
                });
            } else {
                Swal.fire({
                    title: 'Operasi Dibatalkan',
                    icon: 'success'
                });
            }
        });
    });

</script>
@endpush
