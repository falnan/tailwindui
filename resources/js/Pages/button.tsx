import Button1 from "@/Components/button/button1";
import { IconCircle } from "@/Components/icons/icons";
import Layout from "@/Layouts/layoutcoba";
import { router } from "@inertiajs/react";

export default function Button() {
    return (
        <div className="flex gap-4 p-4">
            <Button1 onClick={() => router.get("/")} custom="flex gap-1">
                <IconCircle />
                <span>Button1</span>
            </Button1>
            <Layout />
        </div>
    );
}
