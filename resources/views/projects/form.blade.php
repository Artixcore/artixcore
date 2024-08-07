<div class="mb-3">
    <label for="user_id" class="form-label">User ID</label>
    <input type="text" class="form-control" id="user_id" name="user_id"
        value="{{ old('user_id', $project->user_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_name" class="form-label">Project Name</label>
    <input type="text" class="form-control" id="project_name" name="project_name"
        value="{{ old('project_name', $project->project_name ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_type" class="form-label">Project Type</label>
    <input type="text" class="form-control" id="project_type" name="project_type"
        value="{{ old('project_type', $project->project_type ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_admin_id" class="form-label">Project Admin ID</label>
    <input type="text" class="form-control" id="project_admin_id" name="project_admin_id"
        value="{{ old('project_admin_id', $project->project_admin_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_other_users_id" class="form-label">Project Other Users ID</label>
    <input type="text" class="form-control" id="project_other_users_id" name="project_other_users_id"
        value="{{ old('project_other_users_id', $project->project_other_users_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_start" class="form-label">Project Start</label>
    <input type="text" class="form-control" id="project_start" name="project_start"
        value="{{ old('project_start', $project->project_start ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_end" class="form-label">Project End</label>
    <input type="text" class="form-control" id="project_end" name="project_end"
        value="{{ old('project_end', $project->project_end ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_client_id" class="form-label">Project Client ID</label>
    <input type="text" class="form-control" id="project_client_id" name="project_client_id"
        value="{{ old('project_client_id', $project->project_client_id ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="project_running" class="form-label">Project Running</label>
    <input type="text" class="form-control" id="project_running" name="project_running"
        value="{{ old('project_running', $project->project_running ?? '') }}">
</div>
<div class="mb-3">
    <label for="project_image" class="form-label">Project Image</label>
    <input type="file" class="form-control" id="project_image" name="project_image"
        {{ isset($project) ? '' : 'required' }}>
</div>
<div class="mb-3">
    <label for="project_short_desc" class="form-label">Project Short Description</label>
    <textarea class="form-control" id="project_short_desc" name="project_short_desc" rows="3" required>{{ old('project_short_desc', $project->project_short_desc ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="project_desc" class="form-label">Project Description</label>
    <textarea class="form-control" id="project_desc" name="project_desc" rows="5" required>{{ old('project_desc', $project->project_desc ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="project_video" class="form-label">Project Video</label>
    <input type="file" class="form-control" id="project_video" name="project_video"
        {{ isset($project) ? '' : 'required' }}>
</div>
