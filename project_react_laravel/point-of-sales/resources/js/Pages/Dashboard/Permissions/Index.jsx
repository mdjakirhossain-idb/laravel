import Pagination from '@/Components/Dashboard/Pagination';
import Search from '@/Components/Dashboard/Search';
import Table from '@/Components/Dashboard/Table'
import DashboardLayout from '@/Layouts/DashboardLayout'
import { Head, usePage } from '@inertiajs/react'
import { IconDatabaseOff, IconUserBolt } from '@tabler/icons-react';
import React from 'react'
export default function Index() {

    // destruct permissions from props
    const { permissions } = usePage().props;

    return (
        <>
            <Head title='Has Access' />
            <div className='mb-5'>
                <Search
                    url={route('permissions.index')}
                    placeholder='Search for data based on access rights name...'
                />
            </div>
            <Table.Card title={'Access Rights Data'}>
                <Table>
                    <Table.Thead>
                        <tr>
                            <Table.Th className='w-10'>No</Table.Th>
                            <Table.Th>Access Rights Name</Table.Th>
                        </tr>
                    </Table.Thead>
                    <Table.Tbody>
                        {permissions.data.length ?
                            permissions.data.map((permission, i) => (
                                <tr className='hover:bg-gray-100 dark:hover:bg-gray-900' key={i}>
                                    <Table.Td className='text-center'>
                                        {++i + (permissions.current_page - 1) * permissions.per_page}
                                    </Table.Td>
                                    <Table.Td>
                                        {permission.name}
                                    </Table.Td>
                                </tr>
                            )) :
                            <Table.Empty colSpan={2} message={
                                <>
                                    <div className='flex justify-center items-center text-center mb-2'>
                                        <IconDatabaseOff size={24} strokeWidth={1.5} className='text-gray-500 dark:text-white' />
                                    </div>
                                    <span className='text-gray-500'>Access rights data</span> <span className='text-rose-500 underline underline-offset-2'>Not found.</span>
                                </>
                            } />
                        }
                    </Table.Tbody>
                </Table>
            </Table.Card>
            {permissions.last_page !== 1 && (<Pagination links={permissions.links} />)}
        </>
    )
}
Index.layout = page => <DashboardLayout children={page} />
