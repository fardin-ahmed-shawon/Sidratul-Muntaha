<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Edit Activity'; // Set the page title
?>
<?php require './components/header.php'; ?>



<!--------------------------->
<!-- START MAIN AREA -->
<!--------------------------->
<div class="content-wrapper">
    <div class="edit-activity">
        <!-- Page Header -->
        <div class="page-header">
            <div class="w-100 d-flex flex-wrap justify-content-between align-items-center gap-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <div>
                        <h1>Edit Activity</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="all-activities.php" class="text-decoration-none">All Activities</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Activity</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-outline-secondary" onclick="window.location.href='all-activities.php'">
                        <i class="fa-solid fa-xmark"></i> Cancel
                    </button>
                </div>
            </div>
        </div>

        <!-- Edit Form -->
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row g-4">
                <!-- Left Column -->
                <div class="col-lg-8">
                    <!-- Basic Information Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-circle-info me-2"></i>Basic Information
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="activityTitle" class="form-label">Activity Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="activityTitle" name="title" value="Tree Plantation Drive 2024" required>
                            </div>

                            <div class="mb-3">
                                <label for="activityDescription" class="form-label">Activity Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="activityDescription" name="description" rows="10" required>Join us for our annual Tree Plantation Drive 2024, a community initiative aimed at creating a greener and more sustainable environment for future generations.

This year, we aim to plant 1,000 trees across various locations in Dhaka. The plantation drive will focus on native species that are well-adapted to our local climate and require minimal maintenance.

Event Highlights:
- Plant native tree species in designated areas
- Educational sessions on environmental conservation
- Community engagement and team building activities
- Refreshments and certificates for all participants
- Photo opportunities and media coverage

This is a great opportunity to give back to the community, meet like-minded individuals, and make a lasting environmental impact. All ages are welcome, and families are encouraged to participate together.</textarea>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="activityType" class="form-label">Activity Type <span class="text-danger">*</span></label>
                                    <select class="form-select" id="activityType" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="community_service" selected>Community Service</option>
                                        <option value="workshop">Workshop</option>
                                        <option value="training">Training</option>
                                        <option value="fundraising">Fundraising</option>
                                        <option value="awareness">Awareness Campaign</option>
                                        <option value="social">Social Event</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="activityCategory" class="form-label">Category <span class="text-danger">*</span></label>
                                    <select class="form-select" id="activityCategory" name="category" required>
                                        <option value="">Select Category</option>
                                        <option value="environment" selected>Environment</option>
                                        <option value="education">Education</option>
                                        <option value="health">Health</option>
                                        <option value="poverty">Poverty Alleviation</option>
                                        <option value="youth">Youth Development</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Image Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-image me-2"></i>Activity Image
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <!-- Current Image -->
                            <div class="mb-3">
                                <label class="form-label">Current Image</label>
                                <div class="current-image-preview position-relative">
                                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&h=400&fit=crop" alt="Current Activity Image" class="img-fluid rounded">
                                    <button type="button" class="btn btn-sm btn-danger position-absolute bottom-0 start-0">
                                        <i class="fa-solid fa-trash"></i> Remove
                                    </button>
                                </div>
                            </div>

                            <!-- Upload New Image -->
                            <div>
                                <label for="activityImage" class="form-label">Upload New Image</label>
                                <input type="file" class="form-control" id="activityImage" name="activity_image" accept="image/*">
                                <div class="form-text">Recommended size: 1200x600px. Max file size: 2MB. Formats: JPG, PNG, WebP</div>
                            </div>
                        </div>
                    </div>

                    <!-- Date & Location Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-calendar-days me-2"></i>Date, Time & Location
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="eventDate" class="form-label">Event Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="eventDate" name="event_date" value="2024-03-05" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="eventTime" class="form-label">Event Time <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="eventTime" name="event_time" value="8:00 AM - 12:00 PM" placeholder="e.g., 9:00 AM - 5:00 PM" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="eventLocation" class="form-label">Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="eventLocation" name="location" value="Ramna Park, Dhaka" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="organizer" class="form-label">Organizer <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="organizer" name="organizer" value="Environmental Committee" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="registrationFee" class="form-label">Registration Fee</label>
                                    <input type="text" class="form-control" id="registrationFee" name="registration_fee" value="Free" placeholder="e.g., Free, 500 BDT">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Participants Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-users me-2"></i>Participant Information
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="maxParticipants" class="form-label">Maximum Participants</label>
                                    <input type="number" class="form-control" id="maxParticipants" name="max_participants" value="200" min="1">
                                </div>

                                <div class="col-md-6">
                                    <label for="currentParticipants" class="form-label">Current Registered</label>
                                    <input type="number" class="form-control" id="currentParticipants" name="current_participants" value="150" min="0" readonly>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="registrationOpen" name="registration_open" checked>
                                        <label class="form-check-label" for="registrationOpen">
                                            Registration is currently open
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-address-card me-2"></i>Contact Information
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="coordinator" class="form-label">Coordinator</label>
                                    <input type="text" class="form-control" id="coordinator" name="coordinator" value="Sarah Johnson">
                                </div>

                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contactEmail" name="contact_email" value="sarah.j@organization.org">
                                </div>

                                <div class="col-md-6">
                                    <label for="contactPhone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="contactPhone" name="contact_phone" value="+880 1987-654321">
                                </div>

                                <div class="col-md-6">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="url" class="form-control" id="website" name="website" value="www.organization.org/events">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Attachments Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-paperclip me-2"></i>Attachments & Documents
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <!-- Existing Attachments -->
                            <div class="mb-3">
                                <label class="form-label">Current Attachments</label>
                                <div class="existing-files">
                                    <div class="file-item d-flex align-items-center justify-content-between p-3 border rounded mb-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="fa-solid fa-file-pdf text-danger fs-4"></i>
                                            <div>
                                                <div class="fw-semibold">Activity-Guidelines.pdf</div>
                                                <div class="text-muted small">320 KB</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i> Remove
                                        </button>
                                    </div>
                                    <div class="file-item d-flex align-items-center justify-content-between p-3 border rounded mb-2">
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="fa-solid fa-file-excel text-success fs-4"></i>
                                            <div>
                                                <div class="fw-semibold">Participant-List.xlsx</div>
                                                <div class="text-muted small">145 KB</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Add New Attachments -->
                            <div>
                                <label for="newAttachments" class="form-label">Add New Attachments</label>
                                <input type="file" class="form-control" id="newAttachments" name="attachments[]" multiple>
                                <div class="form-text">You can upload multiple files. Max size: 5MB per file.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-4">
                    <!-- Status Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-toggle-on me-2"></i>Status
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="activityStatus" class="form-label">Activity Status <span class="text-danger">*</span></label>
                                <select class="form-select" id="activityStatus" name="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="draft">Draft</option>
                                    <option value="completed">Completed</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="activityProgress" class="form-label">Progress Status</label>
                                <select class="form-select" id="activityProgress" name="progress">
                                    <option value="upcoming">Upcoming</option>
                                    <option value="ongoing" selected>Ongoing</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>

                            <div class="alert alert-info mb-0">
                                <i class="fa-solid fa-circle-info me-2"></i>
                                <small>Setting status to "Active" will publish this activity immediately.</small>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Details Card -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="fa-solid fa-hashtag me-2"></i>Activity Details
                            </h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label class="form-label text-muted small">Activity ID</label>
                                <div class="fw-bold">#ACT-001</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted small">Created By</label>
                                <div>Admin User</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-muted small">Created On</label>
                                <div>January 10, 2024</div>
                            </div>
                            <div class="mb-0">
                                <label class="form-label text-muted small">Last Modified</label>
                                <div>January 15, 2024</div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Tips Card -->
                    <div class="card shadow-sm mb-4 border-primary">
                        <div class="card-header bg-primary text-white py-3">
                            <h6 class="mb-0">
                                <i class="fa-solid fa-lightbulb me-2"></i>Quick Tips
                            </h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="mb-0 ps-3 small">
                                <li class="mb-2">Use high-quality images</li>
                                <li class="mb-2">Provide clear event details</li>
                                <li class="mb-2">Set realistic participant limits</li>
                                <li class="mb-2">Include contact information</li>
                                <li class="mb-0">Update status regularly</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="card shadow-sm">
                        <div class="card-body p-3">
                            <button type="submit" name="update" class="btn btn-primary w-100 mb-2">
                                <i class="fa-solid fa-floppy-disk"></i> Update Activity
                            </button>
                            <button type="submit" name="save_draft" class="btn btn-outline-secondary w-100 mb-2">
                                <i class="fa-solid fa-file-pen"></i> Save as Draft
                            </button>
                            <button type="button" class="btn btn-outline-danger w-100" onclick="if(confirm('Are you sure you want to delete this activity?')) window.location.href='all-activities.php'">
                                <i class="fa-solid fa-trash"></i> Delete Activity
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--------------------------->
<!-- END MAIN AREA -->
<!--------------------------->

<style>
.edit-activity .card {
    border: none;
}

.edit-activity .card-header {
    border-bottom: 2px solid #e9ecef;
}

.edit-activity .form-label {
    font-weight: 500;
    color: #2d3748;
    margin-bottom: 0.5rem;
}

.edit-activity .form-control,
.edit-activity .form-select {
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    padding: 0.625rem 0.875rem;
    transition: all 0.3s ease;
}

.edit-activity .form-control:focus,
.edit-activity .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.edit-activity .current-image-preview img {
    max-height: 300px;
    width: 100%;
    object-fit: cover;
}

.edit-activity .file-item {
    transition: all 0.3s ease;
}

.edit-activity .file-item:hover {
    background-color: #f8f9fa;
}

.edit-activity .btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    font-weight: 500;
    padding: 0.625rem 1.25rem;
}

.edit-activity .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
}

.edit-activity .btn-outline-secondary {
    border: 2px solid #a0aec0;
    color: #4a5568;
    font-weight: 500;
}

.edit-activity .btn-outline-secondary:hover {
    background: #a0aec0;
    color: white;
}

.edit-activity .btn-outline-danger {
    border: 2px solid #f56565;
    color: #f56565;
    font-weight: 500;
}

.edit-activity .btn-outline-danger:hover {
    background: #f56565;
    color: white;
}

.edit-activity textarea {
    min-height: 200px;
}
</style>



<?php require './components/footer.php'; ?>