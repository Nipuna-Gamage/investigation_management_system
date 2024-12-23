<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add missing columns if they don't exist
            if (!Schema::hasColumn('users', 'initials')) {
                $table->string('initials')->nullable()->after('name');
            }
            if (!Schema::hasColumn('users', 'subject_code')) {
                $table->string('subject_code')->nullable()->after('email');
            }
            if (!Schema::hasColumn('users', 'post')) {
                $table->string('post')->nullable()->after('subject_code');
            }
            if (!Schema::hasColumn('users', 'group_id')) {
                $table->string('group_id')->nullable()->after('post');
            }
            if (!Schema::hasColumn('users', 'staff_level')) {
                $table->string('staff_level')->nullable()->after('group_id');
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('staff_level');
            }
            if (!Schema::hasColumn('users', 'notify_sms')) {
                $table->boolean('notify_sms')->default(false)->after('phone');
            }
            if (!Schema::hasColumn('users', 'status')) {
                $table->string('status')->default('active')->after('notify_sms');
            }
            if (!Schema::hasColumn('users', 'created_by')) {
                $table->unsignedBigInteger('created_by')->nullable()->after('status');
                $table->foreign('created_by')->references('id')->on('users');
            }
            if (!Schema::hasColumn('users', 'updated_by')) {
                $table->unsignedBigInteger('updated_by')->nullable()->after('created_by');
                $table->foreign('updated_by')->references('id')->on('users');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign keys first
            if (Schema::hasColumn('users', 'created_by')) {
                $table->dropForeign(['created_by']);
            }
            if (Schema::hasColumn('users', 'updated_by')) {
                $table->dropForeign(['updated_by']);
            }

            // Drop columns
            $columns = [
                'initials',
                'subject_code',
                'post',
                'group_id',
                'staff_level',
                'phone',
                'notify_sms',
                'status',
                'created_by',
                'updated_by'
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};