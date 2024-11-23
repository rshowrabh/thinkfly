<?php

namespace App\Filament\Pages;

use App\Models\Banner;
use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

class EditBanner extends Page implements HasForms
{
    use InteractsWithForms;
 
    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.edit-banner';

    public static function getNavigationGroup(): ?string
    {
        return __('Sections');
    }
    public static function getNavigationLabel(): string
    {
        return __('Homepage');
    }

    public function mount(Banner $banner): void
    {
        $this->form->fill($banner->first()->toArray());
        
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('banner_heading'),
                TextInput::make('banner_url')->url(),
                FileUpload::make('banner_image')->image()->imageEditor(),
                FileUpload::make('banner_image_offer')->image()->imageEditor(),
                FileUpload::make('banner_image_review')->image()->imageEditor(),
            ])
            ->statePath('data');
    } 
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
    public function save(): void
    {
        try {
            $data = $this->form->getState();
            Banner::find(1)->update($data);
        } catch (Halt $exception) {
            return;
        }
        Notification::make() 
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send(); 
    }
}
