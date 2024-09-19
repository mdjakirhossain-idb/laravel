import React from 'react'
import DashboardLayout from '@/Layouts/DashboardLayout'
import { Head, useForm, usePage } from '@inertiajs/react'
import Card from '@/Components/Dashboard/Card'
import Button from '@/Components/Dashboard/Button'
import { IconPencilPlus, IconUsersPlus } from '@tabler/icons-react'
import Input from '@/Components/Dashboard/Input'
import Textarea from '@/Components/Dashboard/TextArea'
import toast from 'react-hot-toast'

export default function Create() {

    const { errors } = usePage().props

    const { data, setData, post, processing } = useForm({
        name: '',
        no_telp: '',
        address: ''
    })

    const submit = (e) => {
        e.preventDefault()
        post(route('customers.store'), {
            onSuccess: () => {
                if (Object.keys(errors).length === 0) {
                    toast('Data saved successfully', {
                        icon: '👏',
                        style: {
                            borderRadius: '10px',
                            background: '#1C1F29',
                            color: '#fff',
                        },
                    })
                }
            },
            onError: () => {
                toast('An error occurred while saving the data', {
                    style: {
                        borderRadius: '10px',
                        background: '#FF0000',
                        color: '#fff',
                    },
                })
            },
        })
    }

    return (
        <>
            <Head title='Add Customer Data' />
            <Card
                title={'Add Customer Data'}
                icon={<IconUsersPlus size={20} strokeWidth={1.5} />}
                footer={
                    <Button
                        type={'submit'}
                        label={'Submit'}
                        icon={<IconPencilPlus size={20} strokeWidth={1.5} />}
                        className={'border bg-white text-gray-700 hover:bg-gray-100 dark:bg-gray-950 dark:border-gray-800 dark:text-gray-200 dark:hover:bg-gray-900'}
                    />
                }
                form={submit}
            >
                <div className='grid grid-cols-12 gap-4'>
                    <div className='col-span-6'>
                        <Input
                            name='name'
                            label={'Name'}
                            type={'text'}
                            placeholder={'Customer Name'}
                            errors={errors.name}
                            onChange={e => setData('name', e.target.value)}
                        />
                    </div>
                    <div className="col-span-6">
                        <Input
                            name='no_telp'
                            label={'Phone No.'}
                            type={'text'}
                            placeholder={'Customer Phone No.'}
                            errors={errors.no_telp}
                            onChange={e => setData('no_telp', e.target.value)}
                        />
                    </div>
                    <div className="col-span-12">
                        <Textarea
                            name='address'
                            label={'Address'}
                            type={'text'}
                            placeholder={'Customer Address'}
                            errors={errors.address}
                            onChange={e => setData('address', e.target.value)}
                        />
                    </div>
                </div>
            </Card>
        </>
    )
}

Create.layout = page => <DashboardLayout children={page} />
