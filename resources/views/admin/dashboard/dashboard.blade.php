<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <title>Admin Dashboard - ALL PRO SALES</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
        }

        .admin-sidebar {
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            width: 280px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 30px 25px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }

        .sidebar-header h3 {
            color: white;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .sidebar-header p {
            color: rgba(255,255,255,0.8);
            font-size: 14px;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-section {
            margin-bottom: 30px;
        }

        .menu-section h6 {
            color: rgba(255,255,255,0.6);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 25px;
            margin-bottom: 15px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: rgba(255,255,255,0.8);
            padding: 15px 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(255,255,255,0.1);
            color: white;
            border-left-color: #fff;
            transform: translateX(5px);
        }

        .nav-link i {
            margin-right: 12px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px 25px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .logout-btn {
            background: rgba(231, 76, 60, 0.9);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .logout-btn:hover {
            background: #e74c3c;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }

        .admin-content {
            margin-left: 280px;
            padding: 30px;
            min-height: 100vh;
            background: #f4f6f9;
        }

        .page-header {
            background: white;
            border-radius: 15px;
            padding: 25px 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            border-left: 5px solid #667eea;
        }

        .page-header h2 {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #7f8c8d;
            margin: 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }

        .stats-card h3 {
            font-size: 36px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .stats-card p {
            color: #7f8c8d;
            font-weight: 600;
            margin: 0;
        }

        .stats-card .icon {
            position: absolute;
            top: 25px;
            right: 25px;
            font-size: 24px;
            color: #667eea;
        }

        .dashboard-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }

        .content-form {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-admin {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-admin:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .image-preview {
            max-width: 200px;
            max-height: 150px;
            border-radius: 10px;
            margin: 10px 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.show.active {
            display: block;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .quick-action-btn {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: #2c3e50;
        }

        .quick-action-btn:hover {
            border-color: #667eea;
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
            text-decoration: none;
            color: #2c3e50;
        }

        .quick-action-btn i {
            font-size: 32px;
            color: #667eea;
            margin-bottom: 15px;
            display: block;
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            
            .admin-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="admin-sidebar">
                <div class="sidebar-header">
                    <h3>Admin Panel</h3>
                    <p>Welcome, {{ Auth::user()->name }}</p>
                </div>
                
                <div class="sidebar-menu">
                    <div class="menu-section">
                        <h6>Main Navigation</h6>
                        <a class="nav-link active" href="#dashboard" onclick="switchTab('dashboard')">
                            <i class="fa fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                        <a class="nav-link" href="#hero-section" onclick="switchTab('hero-section')">
                            <i class="fa fa-home"></i>
                            Hero Section
                        </a>
                        <a class="nav-link" href="#featured-items" onclick="switchTab('featured-items')">
                            <i class="fa fa-star"></i>
                            Featured Items
                        </a>
                    </div>
                    
                    <div class="menu-section">
                        <h6>Content Management</h6>
                        <a class="nav-link" href="#gallery" onclick="switchTab('gallery')">
                            <i class="fa fa-images"></i>
                            Gallery
                        </a>
                        <a class="nav-link" href="#contact-info" onclick="switchTab('contact-info')">
                            <i class="fa fa-address-book"></i>
                            Contact Info
                        </a>
                        <a class="nav-link" href="#datatable" onclick="switchTab('datatable')">
                            <i class="fa fa-table"></i>
                            Data Tables
                        </a>
                    </div>
                    
                    <div class="menu-section">
                        <h6>System</h6>
                        <a class="nav-link" href="#settings" onclick="switchTab('settings')">
                            <i class="fa fa-cog"></i>
                            Settings
                        </a>
                    </div>
                </div>
                
                <div class="sidebar-footer">
                    <a href="{{ route('logout') }}" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

            <!-- Main Content -->
            <div class="admin-content">
                <div class="tab-content">
                    <!-- Dashboard Overview -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <div class="page-header">
                            <h2>Dashboard Overview</h2>
                            <p>Welcome to your admin dashboard. Manage your content and monitor your site's performance.</p>
                        </div>
                        
                        <div class="stats-grid">
                            <div class="stats-card">
                                <div class="icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3>5</h3>
                                <p>Featured Items</p>
                            </div>
                            <div class="stats-card">
                                <div class="icon">
                                    <i class="fa fa-images"></i>
                                </div>
                                <h3>12</h3>
                                <p>Gallery Images</p>
                            </div>
                            <div class="stats-card">
                                <div class="icon">
                                    <i class="fa fa-folder"></i>
                                </div>
                                <h3>3</h3>
                                <p>Categories</p>
                            </div>
                            <div class="stats-card">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>1</h3>
                                <p>Active User</p>
                            </div>
                        </div>

                        <div class="dashboard-card">
                            <h4>Quick Actions</h4>
                            <div class="quick-actions">
                                <a href="#" class="quick-action-btn" onclick="switchTab('hero-section')">
                                    <i class="fa fa-home"></i>
                                    <h5>Edit Hero Section</h5>
                                    <p>Update main banner content</p>
                                </a>
                                <a href="#" class="quick-action-btn" onclick="switchTab('featured-items')">
                                    <i class="fa fa-star"></i>
                                    <h5>Manage Featured Items</h5>
                                    <p>Update product details</p>
                                </a>
                                <a href="#" class="quick-action-btn" onclick="switchTab('gallery')">
                                    <i class="fa fa-images"></i>
                                    <h5>Update Gallery</h5>
                                    <p>Manage image galleries</p>
                                </a>
                                <a href="#" class="quick-action-btn" onclick="switchTab('datatable')">
                                    <i class="fa fa-table"></i>
                                    <h5>Data Tables</h5>
                                    <p>Manage dynamic data</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Section Management -->
                    <div class="tab-pane fade" id="hero-section">
                        <div class="page-header">
                            <h2>Hero Section Management</h2>
                            <p>Update your main banner content and hero section</p>
                        </div>
                        
                        <div class="content-form">
                            <form id="heroForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Main Heading</label>
                                            <input type="text" class="form-control" value="ALL PRO SALES: Storage Solutions & Outdoor Structures">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Subheading</label>
                                            <textarea class="form-control" rows="3">Need Storage? We Got It! Let Us Help You Beautify Your Outdoor Space Today!</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" value="440-327-7634">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Background Image</label>
                                            <input type="file" class="form-control" accept="image/*">
                                            <img src="assets/images/banner-bg.jpg" class="image-preview" alt="Current background">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Catalog PDF</label>
                                            <input type="file" class="form-control" accept=".pdf">
                                            <small class="text-muted">Current: alpine-structures-catalog.pdf</small>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-admin">Update Hero Section</button>
                            </form>
                        </div>
                    </div>

                    <!-- Featured Items Management -->
                    <div class="tab-pane fade" id="featured-items">
                        <div class="page-header">
                            <h2>Featured Items Management</h2>
                            <p>Manage your featured products and their details</p>
                        </div>
                        
                        <div class="content-form">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <img src="assets/images/sheds/shed1.jpg" class="card-img-top" alt="Shed">
                                        <div class="card-body">
                                            <h5>Premium Storage Sheds</h5>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" value="Premium Storage Sheds">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Rating</label>
                                                <input type="number" class="form-control" value="4.5" step="0.1" min="0" max="5">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Material</label>
                                                <input type="text" class="form-control" value="LP Smart Siding">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Warranty</label>
                                                <input type="text" class="form-control" value="Lifetime">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" accept="image/*">
                                            </div>
                                            <button class="btn btn-admin">Update Item</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <img src="assets/images/greenhouse/greenhouse1.jpg" class="card-img-top" alt="Greenhouse">
                                        <div class="card-body">
                                            <h5>Custom Greenhouses</h5>
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" value="Custom Greenhouses">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Rating</label>
                                                <input type="number" class="form-control" value="4.5" step="0.1" min="0" max="5">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Size Range</label>
                                                <input type="text" class="form-control" value="8x12 to 20x30">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Features</label>
                                                <input type="text" class="form-control" value="Climate Control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" accept="image/*">
                                            </div>
                                            <button class="btn btn-admin">Update Item</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Management -->
                    <div class="tab-pane fade" id="gallery">
                        <div class="page-header">
                            <h2>Gallery Management</h2>
                            <p>Upload and manage images for your galleries</p>
                        </div>
                        
                        <div class="content-form">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <h5>Sheds Gallery</h5>
                                    <div class="mb-3">
                                        <input type="file" class="form-control" accept="image/*" multiple>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"><img src="assets/images/sheds/shed1.jpg" class="img-fluid rounded" alt="Shed 1"></div>
                                        <div class="col-4"><img src="assets/images/sheds/shed2.jpg" class="img-fluid rounded" alt="Shed 2"></div>
                                        <div class="col-4"><img src="assets/images/sheds/shed3.jpg" class="img-fluid rounded" alt="Shed 3"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <h5>Greenhouse Gallery</h5>
                                    <div class="mb-3">
                                        <input type="file" class="form-control" accept="image/*" multiple>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"><img src="assets/images/greenhouse/greenhouse1.jpg" class="img-fluid rounded" alt="Greenhouse 1"></div>
                                        <div class="col-4"><img src="assets/images/greenhouse/greenhouse2.jpg" class="img-fluid rounded" alt="Greenhouse 2"></div>
                                        <div class="col-4"><img src="assets/images/greenhouse/greenhouse3.jpg" class="img-fluid rounded" alt="Greenhouse 3"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-4">
                                    <h5>Deck Gallery</h5>
                                    <div class="mb-3">
                                        <input type="file" class="form-control" accept="image/*" multiple>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"><img src="assets/images/deck/deck1.jpg" class="img-fluid rounded" alt="Deck 1"></div>
                                        <div class="col-4"><img src="assets/images/deck/deck2.jpg" class="img-fluid rounded" alt="Deck 2"></div>
                                        <div class="col-4"><img src="assets/images/deck/deck3.jpg" class="img-fluid rounded" alt="Deck 3"></div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-admin">Update Gallery</button>
                        </div>
                    </div>

                    <!-- Contact Info Management -->
                    <div class="tab-pane fade" id="contact-info">
                        <div class="page-header">
                            <h2>Contact Information</h2>
                            <p>Update your business contact details and information</p>
                        </div>
                        
                        <div class="content-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" value="440-327-7634">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="info@allprosales.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" rows="3">123 Main Street, City, State 12345</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Business Hours</label>
                                            <textarea class="form-control" rows="3">Monday - Friday: 9:00 AM - 6:00 PM
Saturday: 10:00 AM - 4:00 PM
Sunday: Closed</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Social Media Links</label>
                                            <input type="url" class="form-control mb-2" placeholder="Facebook URL">
                                            <input type="url" class="form-control mb-2" placeholder="Instagram URL">
                                            <input type="url" class="form-control" placeholder="Twitter URL">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-admin">Update Contact Info</button>
                            </form>
                        </div>
                    </div>

                    <!-- Data Tables -->
                    <div class="tab-pane fade" id="datatable">
                        <div class="page-header">
                            <h2>Data Tables Management</h2>
                            <p>Manage dynamic content data for your website</p>
                        </div>
                        
                        <div class="content-form">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 15px 15px 0 0;">
                                            <h4 style="margin: 0;"><i class="fa fa-plus-circle"></i> Add New Product</h4>
                                        </div>
                                        <div class="card-body" style="padding: 30px;">
                                            <form id="productForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter product name" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Category</label>
                                                            <select class="form-control">
                                                                <option>Sheds</option>
                                                                <option>Greenhouses</option>
                                                                <option>Deck Materials</option>
                                                                <option>Polly Furniture</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Price</label>
                                                            <input type="number" class="form-control" placeholder="Enter price" step="0.01">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Rating</label>
                                                            <input type="number" class="form-control" placeholder="Rating (1-5)" min="1" max="5" step="0.1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" rows="3" placeholder="Enter product description"></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Features</label>
                                                            <textarea class="form-control" rows="3" placeholder="Enter product features"></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Product Image</label>
                                                            <input type="file" class="form-control" accept="image/*">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Status</label>
                                                            <select class="form-control">
                                                                <option>Active</option>
                                                                <option>Inactive</option>
                                                                <option>Draft</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-admin">
                                                        <i class="fa fa-save"></i> Save Product
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary" style="background: #6c757d; margin-left: 10px;">
                                                        <i class="fa fa-refresh"></i> Reset
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 15px 15px 0 0;">
                                            <h4 style="margin: 0;"><i class="fa fa-table"></i> Products List</h4>
                                        </div>
                                        <div class="card-body" style="padding: 30px;">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead style="background: #f8f9fa;">
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>Category</th>
                                                            <th>Price</th>
                                                            <th>Rating</th>
                                                            <th>Status</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="assets/images/sheds/shed1.jpg" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td>
                                                            <td>Premium Storage Shed</td>
                                                            <td>Sheds</td>
                                                            <td>$1,299</td>
                                                            <td><span class="badge bg-success">4.5</span></td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/greenhouse/greenhouse1.jpg" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td>
                                                            <td>Custom Greenhouse</td>
                                                            <td>Greenhouses</td>
                                                            <td>$2,499</td>
                                                            <td><span class="badge bg-success">4.5</span></td>
                                                            <td><span class="badge bg-success">Active</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="assets/images/deck/deck1.jpg" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td>
                                                            <td>Premium Deck Materials</td>
                                                            <td>Deck Materials</td>
                                                            <td>$899</td>
                                                            <td><span class="badge bg-success">4.5</span></td>
                                                            <td><span class="badge bg-warning">Draft</span></td>
                                                            <td>
                                                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                                            </td>
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

                    <!-- Settings -->
                    <div class="tab-pane fade" id="settings">
                        <div class="page-header">
                            <h2>System Settings</h2>
                            <p>Manage your account and system preferences</p>
                        </div>
                        
                        <div class="content-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>User Management</h5>
                                    <div class="mb-3">
                                        <label class="form-label">Current User: {{ Auth::user()->name }}</label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email: {{ Auth::user()->email }}</label>
                                    </div>
                                    <button class="btn btn-admin">Change Password</button>
                                </div>
                                <div class="col-md-6">
                                    <h5>System Information</h5>
                                    <p><strong>Laravel Version:</strong> {{ app()->version() }}</p>
                                    <p><strong>PHP Version:</strong> {{ phpversion() }}</p>
                                    <p><strong>Database:</strong> MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tabId) {
            // Remove active class from all nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            
            // Add active class to clicked nav link
            event.target.classList.add('active');
            
            // Hide all tab panes
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('show', 'active');
            });
            
            // Show selected tab pane
            document.getElementById(tabId).classList.add('show', 'active');
        }

        // Handle form submissions
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Changes saved successfully! (This is a demo - actual functionality would require backend implementation)');
                });
            });
        });
    </script>
</body>
</html>
