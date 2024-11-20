import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth }) {
    const userName = auth.user.name; // assuming user data is available in auth

    return (
        <AuthenticatedLayout
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Welcome, {userName}!
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-gradient-to-r from-indigo-500 to-blue-600 dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <div className="p-6 text-white flex items-center space-x-4">
                            <span className="text-3xl">👋</span>
                            <div>
                                <h3 className="text-2xl font-bold">Hello, {userName}!</h3>
                                <p className="mt-2 text-lg">
                                    We're glad to have you back. Let's make the most of today!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
