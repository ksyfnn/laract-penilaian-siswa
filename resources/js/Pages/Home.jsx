import React from 'react'
import '../../css/style.css'
import { usePage } from '@inertiajs/inertia-react'
import Layout from '../Pages/Main/Layout.jsx'

const Home = () => {
    const {user} = usePage().props.auth;
    console.log('USER', user);
    return (
        <>
            <Layout>
                <center>
                    <b>
                        <br />
                        SELAMAT DATANG USER DENGAN AKSES MASUK {''}
                        {user.nama_guru ?? user.nama ?? user.nama_siswa}
                    </b>
                </center>
            </Layout>
        </>
    )
}

export default Home;