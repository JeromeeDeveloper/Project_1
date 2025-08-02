<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <title>Data Tables - ALL PRO SALES</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
    <style>
        .datatable-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            margin: 20px;
            overflow: hidden;
        }
        
        .datatable-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px 30px;
        }
        
        .datatable-header h2 {
            margin: 0;
            font-weight: 700;
        }
        
        .datatable-header p {
            margin: 5px 0 0 0;
            opacity: 0.9;
        }
        
        .datatable-body {
            padding: 30px;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .btn-add {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.4);
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            border: none;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table thead th {
            background: #f8f9fa;
            border: none;
            font-weight: 600;
            color: #495057;
        }
        
        .table tbody tr:hover {
            background: #f8f9fa;
        }
        
        .badge {
            padding: 8px 12px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        .btn-action {
            padding: 6px 12px;
            border-radius: 6px;
            border: none;
            margin: 0 2px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-edit {
            background: #007bff;
            color: white;
        }
        
        .btn-delete {
            background: #dc3545;
            color: white;
        }
        
        .btn-view {
            background: #17a2b8;
            color: white;
        }
        
        .btn-action:hover {
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #e9ecef;
        }
        
        .search-box {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            padding: 10px 20px;
            width: 300px;
            margin-bottom: 20px;
        }
        
        .search-box:focus {
            border-color: #667eea;
            outline: none;
        }
    </style>
</head>
<body>
    <div class="datatable-container">
        <div class="datatable-header">
            <h2><i class="fa fa-table"></i> Advanced Data Tables</h2>
            <p>Manage your products, categories, and dynamic content with advanced features</p>
        </div>
        
        <div class="datatable-body">
            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn-add" onclick="openAddModal()">
                    <i class="fa fa-plus"></i> Add New Product
                </button>
                <button class="btn-add" onclick="openCategoryModal()">
                    <i class="fa fa-folder-plus"></i> Add Category
                </button>
                <button class="btn-add" onclick="exportData()">
                    <i class="fa fa-download"></i> Export Data
                </button>
                <button class="btn-add" onclick="importData()">
                    <i class="fa fa-upload"></i> Import Data
                </button>
            </div>
            
            <!-- Search Box -->
            <div class="mb-3">
                <input type="text" class="search-box" placeholder="Search products..." id="searchBox">
            </div>
            
            <!-- Data Table -->
            <div class="table-responsive">
                <table id="productsTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Rating</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="assets/images/sheds/shed1.jpg" class="product-image" alt="Shed"></td>
                            <td>Premium Storage Shed</td>
                            <td><span class="badge bg-primary">Sheds</span></td>
                            <td><strong>$1,299</strong></td>
                            <td><span class="badge bg-success">4.5 ⭐</span></td>
                            <td><span class="badge bg-info">15</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2024-01-15</td>
                            <td>
                                <button class="btn-action btn-view" onclick="viewProduct(1)">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit" onclick="editProduct(1)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete" onclick="deleteProduct(1)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/greenhouse/greenhouse1.jpg" class="product-image" alt="Greenhouse"></td>
                            <td>Custom Greenhouse</td>
                            <td><span class="badge bg-success">Greenhouses</span></td>
                            <td><strong>$2,499</strong></td>
                            <td><span class="badge bg-success">4.5 ⭐</span></td>
                            <td><span class="badge bg-info">8</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2024-01-10</td>
                            <td>
                                <button class="btn-action btn-view" onclick="viewProduct(2)">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit" onclick="editProduct(2)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete" onclick="deleteProduct(2)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/deck/deck1.jpg" class="product-image" alt="Deck"></td>
                            <td>Premium Deck Materials</td>
                            <td><span class="badge bg-warning">Deck Materials</span></td>
                            <td><strong>$899</strong></td>
                            <td><span class="badge bg-success">4.5 ⭐</span></td>
                            <td><span class="badge bg-info">25</span></td>
                            <td><span class="badge bg-warning">Draft</span></td>
                            <td>2024-01-05</td>
                            <td>
                                <button class="btn-action btn-view" onclick="viewProduct(3)">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit" onclick="editProduct(3)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete" onclick="deleteProduct(3)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/polly/polly1.jpg" class="product-image" alt="Polly"></td>
                            <td>Outdoor Polly Furniture</td>
                            <td><span class="badge bg-info">Polly Furniture</span></td>
                            <td><strong>$599</strong></td>
                            <td><span class="badge bg-success">4.5 ⭐</span></td>
                            <td><span class="badge bg-info">12</span></td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>2024-01-12</td>
                            <td>
                                <button class="btn-action btn-view" onclick="viewProduct(4)">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn-action btn-edit" onclick="editProduct(4)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn-action btn-delete" onclick="deleteProduct(4)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-plus-circle"></i> Add New Product</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Product Name *</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category *</label>
                                    <select class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option>Sheds</option>
                                        <option>Greenhouses</option>
                                        <option>Deck Materials</option>
                                        <option>Polly Furniture</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price *</label>
                                    <input type="number" class="form-control" step="0.01" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stock Quantity</label>
                                    <input type="number" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <input type="number" class="form-control" min="1" max="5" step="0.1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-control">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>Draft</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Product Image</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">SKU</label>
                                    <input type="text" class="form-control" placeholder="Stock Keeping Unit">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter product description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Features</label>
                            <textarea class="form-control" rows="3" placeholder="Enter product features"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Specifications</label>
                            <textarea class="form-control" rows="3" placeholder="Enter product specifications"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="saveProduct()">Save Product</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-folder-plus"></i> Add New Category</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm">
                        <div class="mb-3">
                            <label class="form-label">Category Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category Icon</label>
                            <input type="text" class="form-control" placeholder="FontAwesome icon class (e.g., fa-home)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="saveCategory()">Save Category</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#productsTable').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                pageLength: 10,
                order: [[7, 'desc']] // Sort by created date
            });

            // Search functionality
            $('#searchBox').on('keyup', function() {
                $('#productsTable').DataTable().search(this.value).draw();
            });
        });

        function openAddModal() {
            $('#addProductModal').modal('show');
        }

        function openCategoryModal() {
            $('#addCategoryModal').modal('show');
        }

        function saveProduct() {
            // Add your save logic here
            alert('Product saved successfully!');
            $('#addProductModal').modal('hide');
            $('#addProductForm')[0].reset();
        }

        function saveCategory() {
            // Add your save logic here
            alert('Category saved successfully!');
            $('#addCategoryModal').modal('hide');
            $('#addCategoryForm')[0].reset();
        }

        function viewProduct(id) {
            alert('Viewing product ID: ' + id);
        }

        function editProduct(id) {
            alert('Editing product ID: ' + id);
        }

        function deleteProduct(id) {
            if (confirm('Are you sure you want to delete this product?')) {
                alert('Product deleted successfully!');
            }
        }

        function exportData() {
            alert('Exporting data...');
        }

        function importData() {
            alert('Importing data...');
        }
    </script>
</body>
</html>
