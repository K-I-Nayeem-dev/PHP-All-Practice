<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Dashboard</h1>
            <h5>Your E-mail : <?= $_SESSION['login_s_email'] ?></h5>
            <h5>Your Name : <?= $_SESSION['assoc_name'] ?></h5>
            <h5>Your id : <?= $_SESSION['assoc_id'] ?></h5>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-primary">
                        <i class="material-icons-outlined">paid</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Today's Sales</span>
                        <span class="widget-stats-amount">$38,211</span>
                        <span class="widget-stats-info">471 Orders Total</span>
                    </div>
                    <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                        <i class="material-icons">keyboard_arrow_down</i> 4%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-warning">
                        <i class="material-icons-outlined">person</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Active Users</span>
                        <span class="widget-stats-amount">23,491</span>
                        <span class="widget-stats-info">790 unique this month</span>
                    </div>
                    <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                        <i class="material-icons">keyboard_arrow_up</i> 12%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <div class="widget-stats-container d-flex">
                    <div class="widget-stats-icon widget-stats-icon-danger">
                        <i class="material-icons-outlined">file_download</i>
                    </div>
                    <div class="widget-stats-content flex-fill">
                        <span class="widget-stats-title">Downloads</span>
                        <span class="widget-stats-amount">140,390</span>
                        <span class="widget-stats-info">87 items downloaded</span>
                    </div>
                    <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                        <i class="material-icons">keyboard_arrow_up</i> 7%
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card widget widget-list">
            <div class="card-header">
                <h5 class="card-title">Active Tasks<span class="badge badge-success badge-style-light">14 completed</span></h5>
            </div>
            <div class="card-body">
                <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                <ul class="widget-list-content list-unstyled">
                    <li class="widget-list-item widget-list-item-green">
                        <span class="widget-list-item-icon"><i class="material-icons-outlined">article</i></span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Dashboard UI optimisations
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-blue">
                        <span class="widget-list-item-icon"><i class="material-icons-outlined">verified_user</i></span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Mailbox cleanup
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Woodrow Hawkins
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-purple">
                        <span class="widget-list-item-icon"><i class="material-icons-outlined">watch_later</i></span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Header scroll bugfix
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Sky Meyers
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-yellow">
                        <span class="widget-list-item-icon"><i class="material-icons-outlined">extension</i></span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Localization for file manager
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-red">
                        <span class="widget-list-item-icon"><i class="material-icons-outlined">invert_colors</i></span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                New E-commerce UX/UI design
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card widget widget-list">
            <div class="card-header">
                <h5 class="card-title">Todo<span class="badge badge-success badge-style-light">14 completed</span></h5>
            </div>
            <div class="card-body">
                <span class="text-muted m-b-xs d-block">showing 5 out of 23 active tasks.</span>
                <ul class="widget-list-content list-unstyled">
                    <li class="widget-list-item widget-list-item-green">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Dashboard UI optimisations
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-blue">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Mailbox cleanup
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Woodrow Hawkins
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-purple">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Header scroll bugfix
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Sky Meyers
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-yellow">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                Localization for file manager
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                    <li class="widget-list-item widget-list-item-red">
                        <span class="widget-list-item-check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="" checked>
                            </div>
                        </span>
                        <span class="widget-list-item-description">
                            <a href="#" class="widget-list-item-description-title">
                                New E-commerce UX/UI design
                            </a>
                            <span class="widget-list-item-description-subtitle">
                                Oskar Hudson
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card widget widget-payment-request">
            <div class="card-header">
                <h5 class="card-title">Payment Request<span class="badge badge-warning badge-style-light">8 June</span></h5>
            </div>
            <div class="card-body">
                <div class="widget-payment-request-container">
                    <div class="widget-payment-request-author">
                        <div class="avatar m-r-sm">
                            <img src="../assets/images/avatars/avatar.png" alt="">
                        </div>
                        <div class="widget-payment-request-author-info">
                            <span class="widget-payment-request-author-name">Caio Yousuke</span>
                            <span class="widget-payment-request-author-about">Customer Journey Expert</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-product">
                        <div class="widget-payment-request-product-image m-r-sm">
                            <img src="../assets/images/other/facebook_logo.png" class="mt-auto" alt="">
                        </div>
                        <div class="widget-payment-request-product-info d-flex">
                            <div class="widget-payment-request-product-info-content">
                                <span class="widget-payment-request-product-name">Google</span>
                                <span class="widget-payment-request-product-about">Youtube Advertisments</span>
                            </div>
                            <span class="widget-payment-request-product-price">$2,399.99</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-info m-t-md">
                        <div class="widget-payment-request-info-item">
                            <span class="widget-payment-request-info-title d-block">
                                Description
                            </span>
                            <span class="text-muted d-block">Advertisement for envato items</span>
                        </div>
                        <div class="widget-payment-request-info-item">
                            <span class="widget-payment-request-info-title d-block">
                                Due Date
                            </span>
                            <span class="text-muted d-block">14 June, 2021</span>
                        </div>
                    </div>
                    <div class="widget-payment-request-actions m-t-lg d-flex">
                        <a href="#" class="btn btn-light flex-grow-1 m-r-xxs">Reject</a>
                        <a href="#" class="btn btn-primary flex-grow-1 m-l-xxs">Approve</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>