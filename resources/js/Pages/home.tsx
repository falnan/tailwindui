import Button from "@/Components/button/button1";
import Layout from "@/Layouts/layoutcoba";
import { Link } from "@inertiajs/react";

export default function Home() {
    return (
        <div className="p-4 bg-red-200">
            <div className=" grid grid-cols-4 lg:grid-cols-6 text-center text-white font-bold gap-2">
                <Link href="/button" className="rounded-md p-2 bg-blue-500">
                    Button
                </Link>
                <Link href="/pagination" className="rounded-md p-2 bg-blue-500">
                    Pagination
                </Link>
                <Link href="/input" className="rounded-md p-2 bg-blue-500">
                    Input
                </Link>
                <Link href="/table" className="rounded-md p-2 bg-blue-500">
                    Table
                </Link>
                <Link href="/navbar" className="rounded-md p-2 bg-blue-500">
                    Navbar
                </Link>
            </div>
        </div>
    );
}
