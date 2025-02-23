<?php 

namespace FreedomtechHosting\PolydockApp\Enums;

enum PolydockAppInstanceStatus: string
{
    case PENDING_PRE_CREATE = 'pending-pre-create';
    case PRE_CREATE_RUNNING = 'pre-create-running';
    case PRE_CREATE_COMPLETED = 'pre-create-completed';
    case PRE_CREATE_FAILED = 'pre-create-failed';


    case PENDING_CREATE = 'pending-create';
    case CREATE_RUNNING = 'create-running';
    case CREATE_COMPLETED = 'create-completed';
    case CREATE_FAILED = 'create-failed';

    case PENDING_POST_CREATE = 'pending-post-create';
    case POST_CREATE_RUNNING = 'post-create-running';
    case POST_CREATE_COMPLETED = 'post-create-completed';
    case POST_CREATE_FAILED = 'post-create-failed';
    
    case PENDING_PRE_DEPLOY = 'pending-pre-deploy';
    case PRE_DEPLOY_RUNNING = 'pre-deploy-running';
    case PRE_DEPLOY_COMPLETED = 'pre-deploy-completed';
    case PRE_DEPLOY_FAILED = 'pre-deploy-failed';
    
    case PENDING_DEPLOY = 'pending-deploy';
    case DEPLOY_RUNNING = 'deploy-running';
    case DEPLOY_COMPLETED = 'deploy-completed';
    case DEPLOY_FAILED = 'deploy-failed';

    case PENDING_POST_DEPLOY = 'pending-post-deploy';
    case POST_DEPLOY_RUNNING = 'post-deploy-running';
    case POST_DEPLOY_COMPLETED = 'post-deploy-completed';
    case POST_DEPLOY_FAILED = 'post-deploy-failed';

    case PENDING_PRE_REMOVE = 'pending-pre-remove';
    case PRE_REMOVE_RUNNING = 'pre-remove-running';
    case PRE_REMOVE_COMPLETED = 'pre-remove-completed';
    case PRE_REMOVE_FAILED = 'pre-remove-failed';

    case PENDING_REMOVE = 'pending-remove';
    case REMOVE_RUNNING = 'remove-running';
    case REMOVE_COMPLETED = 'remove-completed';
    case REMOVE_FAILED = 'remove-failed';

    case PENDING_POST_REMOVE = 'pending-post-remove';
    case POST_REMOVE_RUNNING = 'post-remove-running';
    case POST_REMOVE_COMPLETED = 'post-remove-completed';
    case POST_REMOVE_FAILED = 'post-remove-failed';

    case REMOVED = 'removed';

    public function getStatusMessage(): string
    {
        return match ($this) {
            self::PENDING_PRE_CREATE => 'Pending Pre-Create',   
            self::PRE_CREATE_RUNNING => 'Pre-Create Running',
            self::PRE_CREATE_COMPLETED => 'Pre-Create Completed',
            self::PRE_CREATE_FAILED => 'Pre-Create Failed',
            self::PENDING_CREATE => 'Pending Create',
            self::CREATE_RUNNING => 'Create Running',
            self::CREATE_COMPLETED => 'Create Completed',
            self::CREATE_FAILED => 'Create Failed',
            self::PENDING_POST_CREATE => 'Pending Post-Create',
            self::POST_CREATE_RUNNING => 'Post-Create Running',
            self::POST_CREATE_COMPLETED => 'Post-Create Completed',
            self::POST_CREATE_FAILED => 'Post-Create Failed',
            self::PENDING_PRE_DEPLOY => 'Pending Pre-Deploy',
            self::PRE_DEPLOY_RUNNING => 'Pre-Deploy Running',
            self::PRE_DEPLOY_COMPLETED => 'Pre-Deploy Completed',
            self::PRE_DEPLOY_FAILED => 'Pre-Deploy Failed',
            self::PENDING_DEPLOY => 'Pending Deploy',
            self::DEPLOY_RUNNING => 'Deploy Running',
            self::DEPLOY_COMPLETED => 'Deploy Completed',
            self::DEPLOY_FAILED => 'Deploy Failed',
            self::PENDING_POST_DEPLOY => 'Pending Post-Deploy',
            self::POST_DEPLOY_RUNNING => 'Post-Deploy Running',
            self::POST_DEPLOY_COMPLETED => 'Post-Deploy Completed',
            self::POST_DEPLOY_FAILED => 'Post-Deploy Failed',
            self::PENDING_PRE_REMOVE => 'Pending Pre-Remove',
            self::PRE_REMOVE_RUNNING => 'Pre-Remove Running',
            self::PRE_REMOVE_COMPLETED => 'Pre-Remove Completed',
            self::PRE_REMOVE_FAILED => 'Pre-Remove Failed',
            self::PENDING_REMOVE => 'Pending Remove',
            self::REMOVE_RUNNING => 'Remove Running',
            self::REMOVE_COMPLETED => 'Remove Completed',
            self::REMOVE_FAILED => 'Remove Failed',
            self::PENDING_POST_REMOVE => 'Pending Post-Remove',
            self::POST_REMOVE_RUNNING => 'Post-Remove Running',   
            self::POST_REMOVE_COMPLETED => 'Post-Remove Completed',
            self::POST_REMOVE_FAILED => 'Post-Remove Failed',
            self::REMOVED => 'Removed',
        };
    }

    public function getStatusColor(): string
    {
        return match ($this) {
            self::PENDING_PRE_CREATE => 'bg-yellow-500',
            self::PRE_CREATE_RUNNING => 'bg-yellow-500',
            self::PRE_CREATE_COMPLETED => 'bg-green-500',   
            self::PRE_CREATE_FAILED => 'bg-red-500',
            self::PENDING_CREATE => 'bg-yellow-500',
            self::CREATE_RUNNING => 'bg-yellow-500',
            self::CREATE_COMPLETED => 'bg-green-500',
            self::CREATE_FAILED => 'bg-red-500',
            self::PENDING_POST_CREATE => 'bg-yellow-500',
            self::POST_CREATE_RUNNING => 'bg-yellow-500',
            self::POST_CREATE_COMPLETED => 'bg-green-500',
            self::POST_CREATE_FAILED => 'bg-red-500',
            self::PENDING_PRE_DEPLOY => 'bg-yellow-500',
            self::PRE_DEPLOY_RUNNING => 'bg-yellow-500',
            self::PRE_DEPLOY_COMPLETED => 'bg-green-500',
            self::PRE_DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_DEPLOY => 'bg-yellow-500',
            self::DEPLOY_RUNNING => 'bg-yellow-500',
            self::DEPLOY_COMPLETED => 'bg-green-500',
            self::DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_POST_DEPLOY => 'bg-yellow-500',
            self::POST_DEPLOY_RUNNING => 'bg-yellow-500',
            self::POST_DEPLOY_COMPLETED => 'bg-green-500',
            self::POST_DEPLOY_FAILED => 'bg-red-500',
            self::PENDING_PRE_REMOVE => 'bg-yellow-500',
            self::PRE_REMOVE_RUNNING => 'bg-yellow-500',
            self::PRE_REMOVE_COMPLETED => 'bg-green-500',
            self::PRE_REMOVE_FAILED => 'bg-red-500',
            self::PENDING_REMOVE => 'bg-yellow-500',
            self::REMOVE_RUNNING => 'bg-yellow-500',
            self::REMOVE_COMPLETED => 'bg-green-500',
            self::REMOVE_FAILED => 'bg-red-500',
            self::PENDING_POST_REMOVE => 'bg-yellow-500',
            self::POST_REMOVE_RUNNING => 'bg-yellow-500',
            self::POST_REMOVE_COMPLETED => 'bg-green-500',
            self::POST_REMOVE_FAILED => 'bg-red-500',
            self::REMOVED => 'bg-green-500',
        };
    }

    public function getStatusIcon(): string
    {
        return match ($this) {
            self::PENDING_PRE_CREATE => 'pending-pre-create',
            self::PRE_CREATE_RUNNING => 'pre-create-running',
            self::PRE_CREATE_COMPLETED => 'pre-create-completed',
            self::PRE_CREATE_FAILED => 'pre-create-failed',
            self::PENDING_CREATE => 'pending-create',
            self::CREATE_RUNNING => 'create-running',
            self::CREATE_COMPLETED => 'create-completed',
            self::CREATE_FAILED => 'create-failed',
            self::PENDING_POST_CREATE => 'pending-post-create',
            self::POST_CREATE_RUNNING => 'post-create-running',
            self::POST_CREATE_COMPLETED => 'post-create-completed',
            self::POST_CREATE_FAILED => 'post-create-failed',
            self::PENDING_PRE_DEPLOY => 'pending-pre-deploy',
            self::PRE_DEPLOY_RUNNING => 'pre-deploy-running',
            self::PRE_DEPLOY_COMPLETED => 'pre-deploy-completed',
            self::PRE_DEPLOY_FAILED => 'pre-deploy-failed',
            self::PENDING_DEPLOY => 'pending-deploy',
            self::DEPLOY_RUNNING => 'deploy-running',
            self::DEPLOY_COMPLETED => 'deploy-completed',
            self::DEPLOY_FAILED => 'deploy-failed',
            self::PENDING_POST_DEPLOY => 'pending-post-deploy',
            self::POST_DEPLOY_RUNNING => 'post-deploy-running',
            self::POST_DEPLOY_COMPLETED => 'post-deploy-completed',
            self::POST_DEPLOY_FAILED => 'post-deploy-failed',
            self::PENDING_PRE_REMOVE => 'pending-pre-remove',
            self::PRE_REMOVE_RUNNING => 'pre-remove-running',
            self::PRE_REMOVE_COMPLETED => 'pre-remove-completed',
            self::PRE_REMOVE_FAILED => 'pre-remove-failed',
            self::PENDING_REMOVE => 'pending-remove',
            self::REMOVE_RUNNING => 'remove-running',
            self::REMOVE_COMPLETED => 'remove-completed',
            self::REMOVE_FAILED => 'remove-failed',
            self::PENDING_POST_REMOVE => 'pending-post-remove',
            self::POST_REMOVE_RUNNING => 'post-remove-running',
            self::POST_REMOVE_COMPLETED => 'post-remove-completed',
            self::POST_REMOVE_FAILED => 'post-remove-failed',
            self::REMOVED => 'removed',
        };
    }

    public function getStatusDescription(): string
    {
        return match ($this) {
            self::PENDING_PRE_CREATE => 'Pending Pre-Create',
            self::PRE_CREATE_RUNNING => 'Pre-Create Running',
            self::PRE_CREATE_COMPLETED => 'Pre-Create Completed',
            self::PRE_CREATE_FAILED => 'Pre-Create Failed',
            self::PENDING_CREATE => 'Pending Create',
            self::CREATE_RUNNING => 'Create Running',
            self::CREATE_COMPLETED => 'Create Completed',
            self::CREATE_FAILED => 'Create Failed',
            self::PENDING_POST_CREATE => 'Pending Post-Create',
            self::POST_CREATE_RUNNING => 'Post-Create Running',
            self::POST_CREATE_COMPLETED => 'Post-Create Completed',
            self::POST_CREATE_FAILED => 'Post-Create Failed',
            self::PENDING_PRE_DEPLOY => 'Pending Pre-Deploy',
            self::PRE_DEPLOY_RUNNING => 'Pre-Deploy Running',
            self::PRE_DEPLOY_COMPLETED => 'Pre-Deploy Completed',
            self::PRE_DEPLOY_FAILED => 'Pre-Deploy Failed',
            self::PENDING_DEPLOY => 'Pending Deploy',
            self::DEPLOY_RUNNING => 'Deploy Running',
            self::DEPLOY_COMPLETED => 'Deploy Completed',
            self::DEPLOY_FAILED => 'Deploy Failed',
            self::PENDING_POST_DEPLOY => 'Pending Post-Deploy',
            self::POST_DEPLOY_RUNNING => 'Post-Deploy Running',
            self::POST_DEPLOY_COMPLETED => 'Post-Deploy Completed',
            self::POST_DEPLOY_FAILED => 'Post-Deploy Failed',
            self::PENDING_PRE_REMOVE => 'Pending Pre-Remove',
            self::PRE_REMOVE_RUNNING => 'Pre-Remove Running',
            self::PRE_REMOVE_COMPLETED => 'Pre-Remove Completed',
            self::PRE_REMOVE_FAILED => 'Pre-Remove Failed',
            self::PENDING_REMOVE => 'Pending Remove',
            self::REMOVE_RUNNING => 'Remove Running',
            self::REMOVE_COMPLETED => 'Remove Completed',
            self::REMOVE_FAILED => 'Remove Failed',
            self::PENDING_POST_REMOVE => 'Pending Post-Remove',
            self::POST_REMOVE_RUNNING => 'Post-Remove Running',
            self::POST_REMOVE_COMPLETED => 'Post-Remove Completed',
            self::POST_REMOVE_FAILED => 'Post-Remove Failed',
            self::REMOVED => 'Removed',
        };
    }
    
    public static function getValues(): array
    {
        return array_map(fn (PolydockAppInstanceStatus $status) => $status->value, self::cases());
    }
}