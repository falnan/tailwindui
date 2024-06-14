import { Pagination1 } from "../pagination/pagination1";

export default function Table1({ data }: any) {
    console.log(data);
    return (
        <div className="w-full overflow-x-auto">
            <table
                className="w-full text-left border border-collapse rounded sm:border-separate border-slate-200"
                cellSpacing="0"
            >
                <tbody>
                    <tr className="bg-slate-100 text-slate-700">
                        <th
                            scope="col"
                            className="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700"
                        >
                            Name
                        </th>
                        <th
                            scope="col"
                            className="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700"
                        >
                            Adress
                        </th>
                        <th
                            scope="col"
                            className="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700"
                        >
                            Phone
                        </th>
                        <th
                            scope="col"
                            className="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700"
                        >
                            Username
                        </th>
                    </tr>
                    {data.data.map((i: any) => (
                        <tr key={i.id} className="odd:bg-slate-50">
                            <td className="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                {i.name}
                            </td>
                            <td className="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                {i.email}
                            </td>
                            <td className="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                {i.phone}
                            </td>
                            <td className="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                {i.username}
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}
