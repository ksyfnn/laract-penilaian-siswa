import { Inertia } from '@inertiajs/inertia'
import { Head } from '@inertiajs/inertia-react'
import react, { useState } from 'react'
import { usePage } from '@inertiajs/inertia-react'
import '../../../resources/css/style.css'

export default function Login() {
    const {error} = usePage().props.errors
    const [idAdmin, setIdAdmin] = useState()
    const [nis, setNis] = useState()
    const [nip, setNip] = useState()
    const [password, setPassword] = useState()

    const [formAdminVisible, setformAdminVisible] = useState(false) 
    const [formSiswaVisible, setFormSiswaVisible] = useState(false) 
    const [formGuruVisible, setFormGuruVisible] = useState(false) 

    const handleLoginAdmin = () => {
        Inertia.post('/login/admin', {
            idAdmin,
            password
        })
    }

    const handleLoginSiswa = () => {
        Inertia.post('/login/siswa', {
            nis,
            password
        })
    }

    const handleLoginGuru = () => {
        Inertia.post('/login/guru',{
            nip,
            password
        })
    }


    return (
        <>
            <Head title="Login" />

            <div className="header">
                <img src="/gambar/header.jpg" height='40%' width='100%' />
            </div>
            <div className='menu'>
                <b><a href="#" className='active'>Home</a></b>
            </div>
            <div className='kiri-atas'>
                <fieldset>
                    <legend></legend>
                    <center>
                        <button className='button-primary'
                        onClick={()=>{
                            setformAdminVisible(!formAdminVisible)
                            setFormSiswaVisible(false)
                            setFormGuruVisible(false)
                        }}>admin</button>
                        
                        <button className='button-primary'
                        onClick={()=>{
                            setFormSiswaVisible(!formSiswaVisible)
                            setformAdminVisible(false)
                            setFormGuruVisible(false)
                        }}>siswa</button>

                        <button className='button-primary'
                        onClick={()=>{
                            setFormGuruVisible(!formGuruVisible)
                            setFormSiswaVisible(false)
                            setformAdminVisible(false)
                        }}>guru</button>
                        <hr />
                        <b>Login whats who u are</b>
                    </center>
                    {/* --------------- FORM LOGIN ADMIN  ---------------  */}
                    <div style={{ display: formAdminVisible ? 'block' : 'none' }}>
                        <center>
                            <b>Login</b>
                            <p className='text-danger'>{error}</p>
                        </center>
                        <table>
                            <tr>
                                <td className='bar'>Kode Admin</td>
                                <td className='bar'>
                                    <input type="text" 
                                    onChange={(e)=>setIdAdmin(e.target.value)}/>
                                </td>
                            </tr>
                            <tr>
                                <td className='bar'>Password</td>
                                <td className='bar'>
                                    <input type="password" 
                                    onChange={(e)=>setPassword(e.target.value)}/>
                                </td>
                            </tr>
                            <tr>
                                <td colSpan='2'>
                                    <center>
                                        <button className='button-primary' type='button'
                                        onClick={()=> handleLoginAdmin()}>Login</button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {/* --------------- FORM LOGIN SISWA  ---------------  */}
                    <div style={{ display : formSiswaVisible ? 'block' : 'none'}}>
                        <center>
                            <b>Login Student</b>
                            <p className='text-danger'>{error}</p>
                        </center>
                        <table>
                            <tr>
                                <td className='bar'>Nis</td>
                                <td className='bar'>
                                    <input type="text" onChange={(e)=>setNis(e.target.value)} />
                                </td>
                            </tr>
                            <tr>
                                <td className='bar'>Password</td>
                                <td className='bar'>
                                    <input type="password" onChange={(e)=>setPassword(e.target.value)} />
                                </td>
                            </tr>
                            <tr>
                                <td colSpan='2'>
                                    <center>
                                        <button className='button-primary' type='button'
                                        onClick={()=> handleLoginSiswa()}>Login</button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {/* --------------- FORM LOGIN GURU  ---------------  */}
                    <div style={{ display: formGuruVisible ? 'block' : 'none' }}>
                        <center>
                            <b>Login Teacher</b>
                            <p className='text-danger'>{error}</p>
                        </center>
                        <table>
                            <tr>
                                <td className='bar'>Nip</td>
                                <td className='bar'>
                                    <input type="text" onChange={(e)=>setNip(e.target.value)} />
                                </td>
                            </tr>
                            <tr>
                                <td className='bar'>Password</td>
                                <td className='bar'>
                                    <input type="password" onChange={(e)=>setPassword(e.target.value)} />
                                </td>
                            </tr>
                            <tr>
                                <td colSpan='2'>
                                    <center>
                                        <button className='button-primary' type='button'
                                        onClick={()=> handleLoginGuru()}>Login</button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div className='kanan'>
                <center>
                    <h1>SELAMAT DATANG
                        <br />
                        DI WEB PENILAIAN SMKN 1 CIBINONG
                    </h1>
                </center>
            </div>

            <div className='kiri-bawah'>
                <center>
                    <p className='mar'>Galery</p>
                    <div className='gallery'>
                        <img src="/gambar/g2.jpg"/>
                        <div className='deskripsi'>SMK BISA</div>
                    </div>
                </center>
            </div>
        </>
    )
}