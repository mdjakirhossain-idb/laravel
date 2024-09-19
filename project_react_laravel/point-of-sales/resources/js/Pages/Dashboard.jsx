import Card from '@/Components/Dashboard/Card';
import Table from '@/Components/Dashboard/Table';
import Widget from '@/Components/Dashboard/Widget';
import DashboardLayout from '@/Layouts/DashboardLayout';
import { Head } from '@inertiajs/react';
import { IconBox, IconCategory, IconMoneybag, IconUsers } from '@tabler/icons-react';
export default function Dashboard() {



    return (
        <>
            <Head title='Dashboard' />
            <div className='grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4'>
                <Widget
                    title={'Category'}
                    subtitle={'Total Category'}
                    color={'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200'}
                    icon={<IconCategory size={'20'} strokeWidth={'1.5'} />}
                    total={21}
                />
                <Widget
                    title={'Product'}
                    subtitle={'Total Product'}
                    color={'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200'}
                    icon={<IconBox size={'20'} strokeWidth={'1.5'} />}
                    total={40}
                />
                <Widget
                    title={'Transaction'}
                    subtitle={'Total Transaction'}
                    color={'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200'}
                    icon={<IconMoneybag size={'20'} strokeWidth={'1.5'} />}
                    total={45}
                />
                <Widget
                    title={'Customar'}
                    subtitle={'Total Customer'}
                    color={'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-200'}
                    icon={<IconUsers size={'20'} strokeWidth={'1.5'} />}
                    total={10}
                />
            </div>
        </>
    );
}

Dashboard.layout = page => <DashboardLayout children={page} />
